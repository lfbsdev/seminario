from flask import Flask, request
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class OZeroTransformer(Resource):
    def get(self, x):
        x = x.replace('o', '0')
        x = x.replace('O', '0')
        return {'output': x}

api.add_resource(OZeroTransformer, '/<string:x>')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
