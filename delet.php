<?php
    include_once('connexion.php');
    $id = $_REQUEST['idmembre'];
    $sql_delet = "DELETE FROM `article` WHERE id = '$id'";
    $sql_delet_exe = mysqli_query($connexion, $sql_delet);
    header('Location: liste_article.php');
?>






