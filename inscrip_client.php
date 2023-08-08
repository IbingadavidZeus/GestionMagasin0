<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Inscription des Clients</title>
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
                <h1 align="center"> Inscription Utilisateur</h1>
                    <form action="formu.php" method="post"> 
                        <legend><b>Coordonnées Client</b></legend>
                            <label for="num_client"> Numéro du Client: </label>
                                <input type="text" name="num_client" maxlength="100" size="35" required>
                            <label for="compte_client">Compte du Client: </label>
                                <input type="text" name="compte_client" maxlength="100" size="35" required>
                            <label for="nom_client">Noms(s) du Client: </label>
                                <input type="text" name="nom_client" maxlength="100" size="35" required>
                            <label for="prenom_client">Prenom(s) du Client: </label>
                                <input type="text" name="prenom_client">
                            <label for="adresse">Adresse: </label>
                                <input type="text" name="adresse" size="35">
                            <label for="telephone">Téléphone: </label>
                                <input type="text" name="telephone" required> <br>
                            <label for="sexe">Sexe: </label>
                                <span><input type="radio" name="sexe" value="Homme" required></span><span>Homme</span>
                                <span><input type="radio" name="sexe" value="Femme" required></span><span>Femme</span> <br>
                                <input type="submit" value="Soumettre" name="Soumettre">
                                <input type="reset" value="Effacer les données" name="Effacer les données">
                    </form>
    
</body>
</html>