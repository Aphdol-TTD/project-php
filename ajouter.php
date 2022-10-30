<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-L1/IRT-ESGIS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>

<?php
                include_once('menu.php');
            ?>
            <!-- formulaire start -->
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3 >Créer un article</h3>
                            <p class="text-subtitle text-muted">Information sur article</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <o class="breadcrumb">
                                   
                                </o>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <form action="trait_article.php" method="POST" class="card" enctype="multipart/form-data">
                    <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="titre" id="titre"
                                            placeholder="Titre" required>
                                    </div>
                                    <div class="form-group">
                                    <textarea class="form-control" id="libelle" name="libelle"
                                            rows="3" placeholder="Libellé" required></textarea>
                                    </div>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                            <span class="input-group-text">Prix unitaire</span>
                                                <input type="number" name="prixUnitaire" id="prixUnitaire" class="form-control"  aria-label="Dollar amount (with dot and two decimal places)" required>
                                                <span class="input-group-text">FCFA</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                            <span class="input-group-text">Quantité en stock</span>
                                                <input type="number" class="form-control" name="quantiteStock" id="quantiteStock" placeholder="" aria-label="Dollar amount (with dot and two decimal places)" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" name="solde" id="solde" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">solde d'article</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            <!-- formulaire end -->

            <?php
                include_once('footer.html');
            ?>
        </div>
    </div>

    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>