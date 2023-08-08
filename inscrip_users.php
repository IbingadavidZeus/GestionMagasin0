<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Inscription des Utilisateurs</title>
</head>
<style>
    body
    {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: #eee 3% url("C:\wamp64\www\GestionMagasin\FullMoon2010") ;
    }
    .login-box
    {
        position: absolute;
        left: 50%;
        top: 60%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: content-box;
        width: 50%;
        box-shadow: 0 15px 25px;
        border-radius: 25px;
    }
    .login-box h2
    {
        margin: 0 0 30px;
        text-align: center;
        color: #eee;
    }
    .login-box .user-box{position: relative;}
    .login-box .user-box input
    {
        width: 100%;
        font-size: 16px;
        padding: 2px 0;
        color: #fff;
        margin-bottom: 10px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    .login-box .user-box
    {
        color: #FFFFFF;
    }
    .login-box .user{color: #FFFFFF;}
</style>
<body>
    <div class="login-box">
        <h2>Inscription</h2>
            <form action="formulaire.php" method="post">
                <div class="user-box">
                <label for="mat_employe">Matricule </label>
                    <input type="text" name="mat_employe" maxlength="100" required>                    
                </div>
                <div class="user-box">
                <label for="nom_employe">Nom(s) </label>
                    <input type="text" name="nom_employe" maxlength="100" required>                    
                </div>
                <div class="user-box">
                <label for="prenom_employe">Prenom(s) </label>
                    <input type="text" name="prenom_employe" maxlength="100">                    
                </div>
                <div class="user-box">
                <label for="mat_employe">Date d'Embauche </label>
                    <input type="text" name="date_embauche" maxlength="100" required> 
                </div>
                <div class="user-box">
                <label for="fonction_employe">Fonction: </label>
                    <input type="text" name="fonction_employe" size="35"> 
                </div>
                <div class="user">
                <label for="sexe">Sexe: </label>
                    <input type="radio" name="sexe" value="Femme">Femme
                    <input type="radio" name="sexe" value="Homme">Homme <br> 
                </div>
                <div class="user-box">
                <label for="password">Votre Mot de Passe:  </label>
                    <input type="password" name="password" id="pass" required>
                </div>
                <div class="user-box">
                <label for="telephone"> Telephone: </label>
                    <input type="text" name="telephone" maxlength="100" size="35" require/>
                </div>
                <div class="user-box">
                <label for="email">E-mail: </label>
                    <input type="email" name="email" required/> <br>
                </div>
                        <input type="submit" value="Soumettre" name="Soumettre">
                        <input type="reset" value="Effacer les données">
            </form>

    </div>
    
</body>
</html>