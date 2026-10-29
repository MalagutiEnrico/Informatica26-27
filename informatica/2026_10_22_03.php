<!doctype html>
<html>
    <head>
        <title>CALCOLO TABELLINE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    </head>
    <body>
        <?php
            if(isset($_GET['bottone'])){
                $scelta = $_GET['bottone'];
                switch($scelta){
                    case "calcola":
                        $numero = $_GET['numero'];

                        echo('<table style="text-align: right;">');
                        for($i = 1; $i <= $numero; $i++){
                            echo("<tr>");
                            for($j = 1; $j <= $numero; $j++){
                                $prodotto = $i * $j;
                                echo("<td>");
                                    echo($prodotto.' ');
                                echo("</td>");
                            }
                            echo("</tr>");
                            //echo('<br/>');
                        }
                        echo('</table>');
                        echo('<a href="2026_10_22_03.php">Torna al form</a>');
                }
            }
            else{
                echo('
                <div class="container-fluid">
                    <h1>SCRIVI LA TABELLINA</h1>
                    <form action="2026_10_22_03.php" method="get">
                        <div class="mb-3">
                            <label for="numero" class="form-label">Inserisci il numero:</label>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="inserisci il numero">
                        </div>
                        <button type="submit" class="btn-solid theme-primary" name="bottone" id="bottone" value="calcola">SCRIVI</button>
                    </form>
                </div>');
            }
        ?>
        <!--Script tichiesto da bootstrap-->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </body>
</html>