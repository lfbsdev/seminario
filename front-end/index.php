<html>
    <head>
        <title>Transforma String</title>
    </head>

    <body>
        <h1>Olá, digite a string</h1>
        <form name="form" action="" method="get">
            <input type="text" name="input" id="input-string" value="tosto">
        </form>
        <?php

        $json = file_get_contents('http://o-zero/' . $_GET['input']);
        $obj = json_decode($json);

        $res = $obj->output;

        echo "<h1>Transformada fica $res</h1>"
        ?>
    </body>
</html>
