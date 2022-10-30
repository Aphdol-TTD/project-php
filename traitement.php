<?php
    if(!empty($_POST['nom']) && $_POST['contact'] >=50999999){
        include_once('connexion.php');

        $nom = htmlentities(addslashes($_POST['nom']));
        $contact = htmlentities(addslashes($_POST['contact']));
        $role = htmlentities(addslashes($_POST['role']));
        $image = htmlentities(addslashes($_FILES['img']['name']));
        $sexe = $_POST['sexe'];

        $upload = "img/".$image;
        

        $sql_verification = "SELECT * FROM membres WHERE nom = '$nom' AND sexe = '$sexe' AND contact = '$contact'";
        $sql_verification_exe = mysqli_query($connexion, $sql_verification);
        if ($mat= mysqli_num_rows($sql_verification_exe) > 0){
            echo '<p style="text-align: center;"><strong>Déjà inscris.</strong></p>';
            include_once('inscription.php');
        }else{
            $sql_nbre_membre = "SELECT MAX(id) FROM membres";
            $sql_nbre_membre_result = mysqli_query($connexion, $sql_nbre_membre);
            $idmax = mysqli_fetch_row($sql_nbre_membre_result);
            $max = 0+$idmax[0];
            if($max<4){
                move_uploaded_file($_FILES['img']['tmp_name'], $upload);
                $sql_insertion = "INSERT INTO `membres`(`id`, `nom`, `contact`, `sexe`, `image`, `role`) VALUES (NULL,'$nom','$contact','$sexe','$image','$role')";
                $sql_insertion_exe = mysqli_query($connexion,$sql_insertion);
                echo '<p style="text-align: center;"><strong>Inscription Valide. Merci!</strong></p>';
                include_once('liste_membre.php');
            }else{
                echo '<p style="text-align: center;"><strong>Sorry,Nombre d\'inscription saturé (Seulement 4 membres autorisée a sincrire ) Merci!</strong></p>';
                include_once('index.php');
            }
        }
    }
else{
    echo '<p style="text-align: center;"><strong>Sorry, Inscription non validée. Merci!</strong></p>';
    include_once('inscription.php');
}
?>