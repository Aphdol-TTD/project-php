<?php
    if(!empty($_POST['titre'])){
        if(!empty($_POST['solde'])){
            $solde = "oui";
        }else{
            $solde = "non";
        }
        include_once('connexion.php');

        $titre = htmlentities(addslashes($_POST['titre']));
        $libelle = htmlentities(addslashes($_POST['libelle']));
        $prixUnitaire = htmlentities(addslashes($_POST['prixUnitaire']));
        $quantiteStock = htmlentities(addslashes($_POST['quantiteStock']));
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        $heure = date('H');
        $minute = date('i');
        $date = $jour."/".$mois."/".$annee." à ".$heure.":".$minute;

        $sql_recherche = "SELECT * FROM `article` WHERE titre = '$titre'";
        $sql_recherche_exe = mysqli_query($connexion, $sql_recherche);

        $sql_recherche1 = "SELECT * FROM `article` WHERE titre = '$titre' AND libelle = '$libelle' AND pu = '$prixUnitaire'";
        $sql_recherche_exe1 = mysqli_query($connexion, $sql_recherche1);
        if($mat = mysqli_num_rows($sql_recherche_exe1) > 0){
            echo '<p style="text-align: center;"><strong>Sorry, Article déjà disponible. Merci!</strong></p>';
            include_once('inscription.php');
        }else{
            if($mat = mysqli_num_rows($sql_recherche_exe) > 0){
                $titre = $titre."(New)";
            }
            $sql_insertion = "INSERT INTO `article`(`id`, `titre`, `libelle`, `pu`, `qtitestock`, `solde`,`date`) VALUES (NULL,'$titre','$libelle','$prixUnitaire','$quantiteStock','$solde','$date')";
            $sql_insertion_exe = mysqli_query($connexion, $sql_insertion);
            header('Location: liste_article.php');
        }
    }else{
        echo '<p style="text-align: center;"><strong>Sorry, Ajout non validée. Merci!</strong></p>';
        include_once('ajouter.php');
    }
?>