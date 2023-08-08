<?php
include("connexion.php");

if(isset($_POST['Soumettre']))
                    {
                        $matricule=strip_tags($_POST['mat_employe']);
                        $nom=strip_tags($_POST['nom_employe']);
                        $prenom=strip_tags($_POST['prenom_employe']);
                        $date=$_POST['date_embauche'];
                        $fonction=$_POST['fonction_employe'];
                        $sexe=$_POST['sexe'];
                        $password=$_POST['password'];
                        $telephone=$_POST['telephone'];
                        $email=$_POST['email'];


                        $sql= "INSERT INTO user (mat_employe, nom_employe, prenom_employe, date_embauche, fonction_employe, sexe, password, telephone, email) VALUES(:mat_employe, :nom_employe, :prenom_employe, :date_embauche, :fonction_employe, :sexe, :password, :telephone, :email)";
                        $stmt = $connexion->prepare($sql);
                        $stmt->execute
                        (
                           array( 
                            ':mat_employe'=>$matricule,
                            ':nom_employe'=>$nom,
                            ':prenom_employe'=>$prenom,
                            ':date_embauche'=>$date,
                            ':fonction_employe'=>$fonction,
                            ':sexe'=>$sexe,
                            ':password'=>$password,
                            ':telephone'=>$telephone,
                            ':email'=>$email
                           )
                        );
                        echo 'Utilisateur enregistré! ';
                        header('location:inscrip_users.php');
                    }
                    else
                    {
                        echo 'erreur';
                    }

?>