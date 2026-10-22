<!doctype html>
<html>
    <head>
        <title>HTTPS REQUEST</title>
    </head>
    <body>
        <?php
            /* Si possono creare chiavi per passare i valori tramite url con i seguenti metodi
                $_GET[] $_POST[] $_REQUEST[]

                prendono i valori dall'url della chiave specifica

                es. url: "http://..../prova.php?chiave=12"

                $var = $_GET['chiave'];

                $var = 12;
            */

            if(isset($_GET['chiave']))      //controlla che la chiave esista nell'url
                $var = $_GET['chiave'];

            echo($var);
        ?>
    </body>
</html>