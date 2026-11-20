<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestione Ospedaliera</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    </head>
    <body>
        <div class="container text-center">
            <br>
            <nav class="navbar sm:navbar-expand bg-1 fg-2">
                <div class="container-fluid">
                    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                    </button>
                    <dialog class="drawer drawer-end" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarNavLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="drawer-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="2026_11_19_Medico.php?scelta=visualizzaMedici">Visualizza tutti i medici</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Inserisci Medico</a>
                            </li>
                        </ul>
                    </div>
                    </dialog>
                </div>
            </nav>

            <?php
                if(isset($_GET['scelta']))
                    $scelta = $_GET['scelta'];
                else
                    $scelta = null;

                switch($scelta){
                    case "visualizzaMedici":
                        $db = new mysqli("localhost", "root", "root", "gestione ospedaliera");
                        $sql = "SELECT * FROM Medici";
                        $resultSet = $db->query($sql);
                        $db->close();
                        ?>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOME</th>
                                    <th scope="col">COGNOME</th>
                                    <th scope="col">CODICE FISCALE</th>
                                    <th scope="col">NUMERO ALBO</th>
                                    <th scope="col">TELEFONO</th>
                                    <th scope="col">EMAIL</th>
                            </thead>
                            <tbody>
                                <?php

                                while($record = $resultSet->fetch_assoc()){
                                    echo('<tr>
                                    <th scope="row">'.$record['idMedico'].'</th>
                                    <td>'.$record['nome'].'</td>
                                    <td>'.$record['cognome'].'</td>
                                    <td>'.$record['codiceFiscale'].'</td>
                                    <td>'.$record['numeroAlbo'].'</td>
                                    <td>'.$record['telefono'].'</td>
                                    <td>'.$record['email'].'</td>
                                    </tr>');
                                }

                                ?>
                            </tbody>
                        </table>
                        <?php
                }
                ?>
        </div>

        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </body>
</html>