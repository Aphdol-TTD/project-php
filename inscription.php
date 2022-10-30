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
                            <h3>Formulaire D'inscription</h3>
                            <p class="text-subtitle text-muted">Ajout de quatre utilisateur au plus.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                   
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <form action="traitement.php" method="POST" class="card" enctype="multipart/form-data">
                    <div class="card-header">
                            <h4 class="card-title">Remplissez les champs</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nom" id="bom"
                                            placeholder="Nom et Prénoms" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sexe">Sexe</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexe" value="M"
                                            id="sexe1" checked>
                                        <label class="form-check-label" for="sexe1">
                                            Masculin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexe" value="F"
                                            id="sexe2">
                                        <label class="form-check-label" for="sexe2">
                                            Feminin
                                        </label>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="contact" id="contact"
                                            placeholder="Contact" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Votre image</label>
                                        <input type="file" class="form-control" name="img" id="img" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Votre rôle dans le TP</label>
                                    <textarea class="form-control" id="role" name="role"
                                            rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
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