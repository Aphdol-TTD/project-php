<?php
include_once('connexion.php');

$id = $_REQUEST['idmembre'];
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
if(!empty($_POST['solde'])){
    $solde = "oui";
}else{
    $solde = "non";
}

$sql_edit = "UPDATE `article` SET `titre`='$titre',`libelle`='$libelle',`pu`='$prixUnitaire',`
qtitestock`='$quantiteStock',`solde`='$solde',`date`='$date' WHERE id = '$id'";
$sql_edit_exe = mysqli_query($connexion,$sql_edit);
$redirection = "Location: afficher_article.php?idmembre=".$id;
header($redirection);
?>