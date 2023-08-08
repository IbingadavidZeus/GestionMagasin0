<?php
    include('connexion.php');

if(isset($_POST['Soumettre']))
    {
        $num_produit=strip_tags($_POST['num_produit']);
        $nom_produit=strip_tags($_POST['nom_produit']);
        $prix_produit=strip_tags($_POST['prix_produit']);
        $categorie=$_POST['categorie'];
        $date_prod=$_POST['date_prod'];
        $date_exp=$_POST['date_exp'];


        $sqlate = "INSERT INTO produit(num_produit, nom_produit, prix_produit, categorie, date_prod, date_exp) VALUES (:num_produit, :nom_produit, :prix_produit, :categorie, :date_prod, :date_exp)";
        $stmt = $connexion->prepare($sqlate);
        $stmt->execute
        (
            array
            (
                ':num_produit'=>$num_produit,
                ':nom_produit'=>$nom_produit,
                ':prix_produit'=>$prix_produit,
                ':categorie'=>$categorie,
                ':date_prod'=>$date_prod,
                ':date_exp'=>$date_exp,
            )
        );
        echo 'Produit enregistré avec succès!';
        header('location:insrcip_produit.php');
    }
else
    {
        echo 'erreur enregistement!';
    }




?>