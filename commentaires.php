
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <link href="CSS/commentaires.css" rel="stylesheet">
    <title>Commentaires</title>
</head>
<body>
    <div class="image_comments">
        <?php include 'header.php'?>
    </div>
    
    <div class="titre_comments">
        <h2>LAISSER VOTRE COMMENTAIRE</h2>
    </div>
    <div id="bloc_comments">
        <div class="list_return">
            <p><a href="index.php"><img src="CSS/images/plant_logo.png">Retour à la liste des articles</a></p>
        </div>
        <?php
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
        catch(Exception $e){
            
            die('Erreur : '.$e->getMessage());
            } 

            // Récupération du billet
            $req = $bdd->prepare('SELECT id, titre, article, date_creation AS date_creation_fr FROM infos WHERE id = ?');
            $req->execute(array($_GET['infos']));
            $donnees = $req->fetch();
                
        ?>

        <div class="news">
        <!--affichage titre, contenu, date article ou clic-->
            <h3>
                <?php echo htmlspecialchars($donnees['titre']); ?>
                <span>le <?php echo $donnees['date_creation_fr']; ?></span>
            </h3>

            <p>
                <?php
                echo nl2br(htmlspecialchars($donnees['article']));
                ?>
            </p>
        </div>

            <form action="commentaires.php" method="POST">
                    <input placeholder="Auteur" type="text" name="auteur" size="30"value=""></input></br>
                    <input placeholder="Laissez votre commentaires" type="text" name="commentaire" size="50" value="" ></input>
                    <button name="submit">Envoyez</button>
            </form>

            <?php 
                if(isset($_POST['submit'])){
                    $auteur = htmlspecialchars($_POST['auteur']);
                    $commentaire = htmlspecialchars($_POST['commentaire']);

                    if($auteur && $commentaire){
                            // appel de bdd
                            try{
                                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            }
                            catch(Exception $e){
                                // En cas d'erreur, on affiche un message et on arrête tout
                                die('Erreur : '.$e->getMessage());
                            } 
                            //envoi des champs remplis dans la bdd
                        
                            
                            $envoi = $bdd->query('INSERT INTO commentaires(auteur, commentaire, date_commentaire) VALUES("'.$auteur.'", "'.$commentaire.'", NOW())') ;
                            
                            
                            echo 'Un nouveau commentaire a été ajouté.';

                    }
                    else{
                        echo 'Remplissez tous les champs';
                    }
                
                }

            ?>
        <div class="bloc_commentaires">
            <?php

            $affichage = $bdd->query('SELECT auteur, commentaire, date_commentaire FROM commentaires');
            while ($donnees = $affichage->fetch())
            {
                echo '<p><strong>' . htmlspecialchars($donnees['auteur']) . '</strong></br>' . htmlspecialchars($donnees['commentaire']) . '</br>' . htmlspecialchars($donnees['date_commentaire']) .'</p>';    
            ?>

            
        </div>   
            <?php  
            }          
            $affichage->closeCursor(); 
            ?>

    </div>
<?php include 'footer.php'?>   
</body>
</html>