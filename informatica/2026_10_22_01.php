<!doctype html>
<html>
    <head>
        <title>FORM</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    </head>
    <body>
        <?php
            if(isset($_GET['scelta'])){                 //se scelta esiste
                switch(isset($_GET['scelta'])){
                    case "calcola":
                        $a = $_GET['inputA'];
                        $b = $_GET['inputB'];

                        $c = $a + $b;

                        echo('La somma è:'.$c.'<br/>');
                        echo('<a href="2026_10_22.php">Torna al form</a>');
                }
            }
            else{
                echo('<div class="container-fluid">
                        <h1>PROVA FORM CON INSERIMENTO NUMERI</h1>
                        <form>
                            <div class="mb-3">
                                <label for="inputA" class="form-label">Valore A</label>
                                <input type="text" class="form-control" name="inputA" id="inputA" placeholder="Valore di A">
                            </div>
                            <div class="mb-3">
                                <label for="inputB" class="form-label">Valore B</label>
                                <input type="text" class="form-control" name="inputB" id="inputB" placeholder="Valore di B">
                            </div>
                            <button type="submit" class="btn-solid theme-primary" name="scelta" id="scelta" value="calcola">Calcola</button>
                        </form>
                    </div>');
            }
        ?>


        <!--Script tichiesto da bootstrap-->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </body>
</html>
