<?php
                    $serveur = "localhost";
                    $login = "root";
                    $pass = "";
                    $dbname = "jc_e-shop";
                    
                    
    
                    try
                    {
                        $connexion = new PDO("mysql:host=$serveur;dbname=$dbname", $login, $pass);
                        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
                    }
                    
                    catch(PDOException $e)
                    {
                        echo "la connexion a echoué: " .$e->getMessage();
                    }                  
?>
