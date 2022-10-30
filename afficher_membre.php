<?php
    if(!isset($_REQUEST['idmembre'])){
        echo '<p style="text-align: center;"><strong>Sorry.  Un problème est survenu lors de l\'execution  de la requete. Merci!</strong></p>';
        include_once('liste_membre.php');
    }
    else{
        $id = $_REQUEST['idmembre'];
        include_once('connexion.php');
        $sql_requete_selection_membre = "SELECT * FROM `membres` WHERE id = '$id'";
        $sql_requete_selection_membre_resultat = mysqli_query($connexion, $sql_requete_selection_membre);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-L1/IRT-GROUPE/II-ESGIS</title>

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
?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last"></div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">MENU-PRINCIPALE</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                    <div class="card">
                    <div class="card-body">
                        <?php
                            while($ligne = mysqli_fetch_assoc($sql_requete_selection_membre_resultat)){
                        ?>
                        <div class="row h-100">
                            <div id="auth-left">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="img/<?php echo $ligne['image'] ;?>" alt="<?php echo $ligne['nom'] ;?>" style="width:60%; border-radius: 100%">
                                    </div>
                                    <div class="col-sm-7" style="padding-top: 50px;">
                                        <h1 style="color: rgb(47, 23, 63); font-size: 35px"><i class="bi bi-person"></i> <?php echo $ligne['nom'] ;?></h1>
                                        <br>
                                        <p style="font-size: 20px;"><strong style="text-decoration: underline">Numéro-Tel:</strong> <span><?php echo $ligne['contact'] ;?></span></p>
                                        <p style="font-size: 20px;"><strong style="text-decoration: underline">Sexe:</strong> <span><?php echo $ligne['sexe'] ;?></span></p>
                                    </div>
                                </div>
                                <hr>
                                <section class="section">
                                    <div class="card-header" style="font-size: 25px;">
                                        <h4 style=" text-align: center; font-size: 25px;"> Votre rôle dans le projet </h4>
                                        <p>
                                            <?php echo $ligne['role'] ;?>
                                        </p>
                                    </div>
                                </section>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
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
<?php
    }
?>