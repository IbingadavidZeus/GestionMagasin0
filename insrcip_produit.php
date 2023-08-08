<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style">
    <title>Inscription des Produits</title>
</head>
<body>
<style>
        body
        {
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: left;
        }
        form
        {
            display: grid;
            padding: 0.2em;
            margin-left: 0.2em;
            margin-right: 96em;
        }
        form input, label
        {
            margin: 0.2em;
            padding: 0.2em;
        }
    </style>
            <h1 align="center">Valeurs du Produit</h1>
                <form action="formi.php" method="post">
                    <legend><b>Identifiant Produit: </b></legend>
                    <label for="num_produit">Numéro du Produit: </label>
                        <input type="text" name="num_produit" maxlength="100" size="35" required>
                    <label for="nom_produit">Nom du Produit</label>
                        <input type="text" name="nom_produit" maxlength="100" required>
                    <label for="prix_produit">Prix du Produit</label>
                        <input type="text" name="prix_produit" required>
                    <label for="categorie">Categorie du Produit</label>
                        <input type="text" name="categorie">
                    <label for="date_prod">Date de Production du Produit</label>
                        <input type="text" name="date_prod" required>
                    <label for="date_exp">Date de Péremption</label>
                        <input type="text" name="date_exp" required>

                        <input type="submit" value="Soumettre" name="Soumettre">
                        <input type="reset" value="Effacer les données" name="Effacer les données">
                </form>
</body>
</html>