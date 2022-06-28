from flask import Flask, request
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class OZeroTransformer(Resource):
    def get(self):
        return {'output': 'testando'}
    def put(self):
        string = request.form['input']
        string = string.replace('o', '0')
        string = string.replace('O', '0')
        return {'output': string}

api.add_resource(OZeroTransformer, '/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)