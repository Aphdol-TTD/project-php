<?php
include_once('connexion.php');
$sql_requete_selection = "SELECT * FROM `membres`";
$sql_requete_selection_resultat = mysqli_query($connexion, $sql_requete_selection);

?>
<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><strong style="color:rgb(77, 10, 46)"></strong>Menu-Principale</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>

                                <span>Menu-Principale</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="inscription.php" class='sidebar-link'>
                                <span>Inscription</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <span>Membres du groupe</span>
                            </a>
                            <ul class="submenu ">
                            <li class="submenu-item ">
                                    <a href="liste_membre.php">Liste des membres</a>
                                </li>
                                <?php
                                    while($ligne = mysqli_fetch_assoc($sql_requete_selection_resultat)){
                                    ?>
                                        <li class="submenu-item ">
                                            <a href="afficher_membre.php?idmembre=<?php echo $ligne['id']; ?>"><?php echo $ligne['nom']." (".$ligne['contact'].")"?></a>
                                        </li>
                                    <?php
                                    }
                                ?>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <span>Articles</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="liste_article.php">Affichage</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="ajouter.php">Ajout</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="liste_article.php">Suppression</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>