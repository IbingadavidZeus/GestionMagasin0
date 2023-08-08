<?php
include("connexion.php");

if(isset($_POST['Soumettre']))
    {
        $num_client=strip_tags($_POST['num_client']);
        $compte_client=strip_tags($_POST['compte_client']);
        $nom_client=strip_tags($_POST['nom_client']);
        $prenom_client=strip_tags($_POST['prenom_client']);
        $adresse=$_POST['adresse'];
        $telephone=strip_tags($_POST['telephone']);
        $sexe=strip_tags($_POST['sexe']);


            $sqlite = "INSERT INTO client (num_client, compte_client, nom_client, prenom_client, adresse, telephone, sexe) VALUE (:num_client, :compte_client, :nom_client, :prenom_client, :adresse, :telephone, :sexe)";
            $stmt = $connexion->prepare($sqlite);
            $stmt->execute
            (
                array
                (
                    ':num_client'=>$num_client,
                    ':compte_client'=>$compte_client,
                    ':nom_client'=>$nom_client,
                    ':prenom_client'=>$prenom_client,
                    ':adresse'=>$adresse,
                    ':telephone'=>$telephone,
                    ':sexe'=>$sexe,
                )
            );
            echo 'Client enregisté avec succès! ';
            header('location:inscrip_client.php');
    }
else
    {
        echo 'erreur enregistrement!';
    }



?>