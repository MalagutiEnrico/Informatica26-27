<!doctype html>
<html>
    <head>
        <title>PROVA PHP</title>
    </head>
    <body>
        <?php
            //phpinfo();

            echo("PROVA".'<br />');
            $var;

            $var = 19;
            echo($var.'<br />');        //concatena la variabile e un tag html

            $var = $var / 2;
            echo($var.'<br />');

            //var_dump($var);             //mostra il tipo di variabile

            if($var < 10)
                echo('Variabile minore di 10 <br />');
            else
                echo('Variabile maggiore di 10 <br />');

            $var = 0;

            while($var <= 10){
                echo($var.'-');
                $var++;
            }

            echo('<br />');
        ?>
    </body>
</html>