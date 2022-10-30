<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-L1/IRT-ESGIS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
<?php
        include_once('menu.php');
        
        include_once('connexion.php');
        $sql_requete_selection = "SELECT * FROM `membres`";
        $sql_requete_selection_resultat = mysqli_query($connexion, $sql_requete_selection);
    ?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div style="padding-top: 30px;"></div>
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>La liste des membres</h3>
                            <p class="text-subtitle text-muted">NB: Ajout de quatres membres au plus</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                               
                               
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" style="font-size: 20px;">
                                <thead>
                                    <tr>
                                        <th>Nom :</th>
                                        <th>Téléphone :</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($ligne = mysqli_fetch_assoc($sql_requete_selection_resultat)){
                                        ?>
                                            <tr>
                                                <td><a href="afficher_membre.php?idmembre=
                                                <?php echo $ligne['id'] ;?>">
                                                <?php echo $ligne['nom'] ;?></a></td>
                                                
                                            </tr>
                                        <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
            <?php
                include_once('footer.html');
            ?>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>