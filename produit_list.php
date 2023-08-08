<?php
    include('connexion.php');



        $requete = "SELECT * FROM produit ORDER BY id_prod ASC";
        $result = $connexion->query($requete);


            if(!$result)
            {
                echo 'La recupérations des données a rencontré un problème!';
            }
            else
            {
                $nbre_user = $result->rowCount();
            }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h3>Tous les Utilisateur</h3>
    <h4>Il y a <?=$nbre_user?></h4>

    <table>
        <tr>
            <th>Identifiant</th>
            <th>Numéro Produit</th>
            <th>Nom Produit </th>
            <th>Prix du Produit</th>
            <th>Catégorie</th>
            <th>Date de Production</th>
            <th>date de Péremption</th>
        </tr>

            <?php

                while($ligne= $result->fetch(PDO::FETCH_NUM))
                    {
                        echo "<tr>";
                        foreach ($ligne as $valeur)
                        {
                            echo "<th>$valeur</th>";
                        }
                        echo "</tr>";
                    }
            ?>
    </table>
    <?php
        $result->closeCursor();
    ?>
</body>
</html>