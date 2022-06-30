<html>
    <head>
        <title>Transforma String</title>
    </head>

    <body style='text-align:center; padding:20px'>
        <h1>Olá, digite a string</h1>
        <form name="form" action="" method="get">
            <input type="text" name="input" id="input-string">
        </form>
        <?php

        
        $json = file_get_contents('http://o-zero/' . $_GET['input']);
        $obj = json_decode($json);

        $res = $obj->output;

        echo "<h1>Trocando 'o' por '0' fica $res</h1>";

        $json2 = file_get_contents('http://a-quatro/' . $res);
        $obj2 = json_decode($json2);

        $res2 = $obj2->output;

        echo "<h1>Trocando 'a' por '4' fica $res2</h1>";;

        ?>
    </body>
</html>
