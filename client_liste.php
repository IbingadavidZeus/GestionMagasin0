<?php
    include('connexion.php');



        $requete = "SELECT * FROM client ORDER BY id ASC";
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
<style>
    table
    {
        table-layout: fixed;
        border-collapse: collapse;
        border: 2px solid black;
    }
    th
    {
        letter-spacing: 2px;
    }

</style>
<body>
    <h3>Tous les Clients</h3>
    <h4>Il y a <?=$nbre_user?></h4>

    <table>
        <tr>
            <th scope="col"><i lang="fr">Identifiant</i></th>
            <th scope="col"><i lang="fr">Numéro Client</i></th>
            <th scope="col"><i lang="fr">Compte Client</i></th>
            <th scope="col"><i lang="fr">Nom(s)</i></th>
            <th scope="col"><i lang="fr">Prénom(s)</i></th>
            <th scope="col"><i lang="fr">Sexe</i></th>
            <th scope="col"><i lang="fr">Adresse</i></th>
            <th scope="col"><i lang="fr">Telephone</i></th>
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