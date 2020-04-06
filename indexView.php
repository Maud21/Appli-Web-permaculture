<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">


    <title>Permaculture</title>
</head>
<body>
    <div class="image_accueil">
        <?php require 'header.php';?>
            <h1>LA PERMACULTURE</br>CHEZ MOI</h1>
        
    </div>
<!--INFOS-->  
    <div id="infos">
        <h2>LES DERNIERES INFOS</h2>
            <div class="container" id="infos2">
                <div class="row">
<!--infos article 1--> 
                    <div class="col-sm-4">
                    <img src="CSS/images/junior_perma.jpg">
                        <?php
                            while ($data = $reponse1->fetch())
                            {
                                echo '<h4><strong>' . htmlspecialchars($data['titre']) . '</strong></br>' .'</h4>';
                                echo '<p>' . htmlspecialchars($data['article']) . '</br>'  . htmlspecialchars($data['date_creation']) . '</br></h4>';
                        ?>        
                                <span><a href="postsView.php?infos=<?php echo $data['id']; ?>">Laisser un commentaires</a></span>
                        <?php    
                            }
                            $reponse1->closeCursor(); 
                        ?>
                    </div>
<!--infos article 2-->                    
                    <div class="col-sm-4">
                    <img src="CSS/images/season_perma.jpg">

                    <?php    
                            while ($data = $reponse2->fetch())
                            {
                                echo '<h4><strong>' . htmlspecialchars($data['titre']) . '</strong></br>' .'</h4>';
                                echo '<p>' . htmlspecialchars($data['article']) . '</br>' . htmlspecialchars($data['date_creation']) . '</br></h4>';
                                            
                    ?>
                    <span><a href="postsView.php?infos=<?php echo $data['id']; ?>">Laisser un commentaires</a></span>
                    <?php
                            }
                            $reponse2->closeCursor(); 
                    ?>
                    </div>
<!--infos article 3-->                   
                    <div class="col-sm-4">
                    <img src="CSS/images/zoom_perma.jpg">
                        <h4>Notre dossier</h4>
                    </div>
                </div>
            </div>
    </div>
<!--tous les articles-->
    <div class="tousArticles">
       <button>VOIR TOUS LES ARTICLES</button> 
    </div>

<!--LA TERRE-->
    <div id="terre">
        <h2>LA TERRE</h2>
        <img src="CSS/images/terre_perma.jpg">
        <?php
            while ($data = $req->fetch())
            {
                echo '<h4><strong>' . htmlspecialchars($data['titre']) . '</strong></br>' .'</h4>';
                echo '<p>' . htmlspecialchars($data['article']) . '</br></h4>';
        ?>
            <span><a href="postsView.php?infos=<?php echo $data['id']; ?>">Laisser un commentaires</a></span>

        <?php
            }
            $req->closeCursor(); 
        ?>
    </div>
<!--LES ASSOCIATIONS-->
    <div id="associations">
        <h2>LES ASSOCIATIONS</h2>
    </div>
        <div class="resume">
            <h4>Imitons la nature ! Associer des cultures, c’est imbriquer 
            et cultiver </br>plusieurs plantes différentes au même endroit et en même temps.
            Elles vont se protéger, s'entraider<h4>
        </div>
        <div class="container" id="assoc">
            <div class="row">
                <div class="col-sm-4 num1">
                    <h3>Les tomates</h3>
                        <p>carottes, céleri, chou-rave, chou, épinard, 
                            haricots nains, laitue, maïs, menthe poivrée, 
                            persil, poirreau, radis, rave, salade</p>
                </div>
                <div class="col-sm-4 num2">
                    <h3>Les concombres</h3>
                        <p>aneth, betterave rouge, céleri, chou, fenouil, 
                            haricots à rame, haricots nains, laitue, oignon</p>
                    
                </div>
                <div class="col-sm-4 num3">
                    <h3>Les fraises</h3>
                        <p>choux, laitue, oignon, poireau, radis</p>
                </div>
            </div>
        </div>
        <div class="container" id="assoc2">
            <div class="row">
                <div class="col-sm-4 num4">
                    <h3>Les pommes de terre</h3>
                        <p>chou-rave, épinard, </br>menthe poivrée, rave</p>
                </div>
                <div class="col-sm-4 num5">
                    <h3>Les radis</h3>
                        <p>blettes, carotte, chou-rave, choux, épinard,
                            fraise, grande capucine, haricots à rame, 
                            haricots nains, laitue, persil, petits pois, salade, tomate
                        </p>
                </div>
                <div class="col-sm-4 num6">
                    <h3>Le persil</h3>
                        <p>
                            radis, tomate
                        </p>
                </div>
            </div>
            </div>
<!--toutes les associations-->
<div class="tousAssociations">
       <button>PLUS D'ASSOCIATIONS</button> 
    </div>
<!--LES ANIMAUX-->
    <div id="animaux">
        <h2>LES ANIMAUX</h2>
    </div>      
    <div class="container" id="bloc_animaux">
        <div class="row">
            <div class="col-sm-3">
                <img src="CSS/images/chicken.jpg">
                    <?php
                    while ($data = $req2->fetch())
                    {
                        echo '<h4><strong>' . htmlspecialchars($data['titre']) . '</strong></br>' .'</h4>';
                        echo '<p>' . htmlspecialchars($data['article']) . '</br></h4>';
                    $req2->closeCursor(); 
                    }
                    ?>
            </div>
            <div class="col-sm-3">
                <img src="CSS/images/herisson.jpg">
                    <?php
                        while ($data = $req3->fetch())
                        {
                            echo '<h4><strong>' . htmlspecialchars($data['titre']) . '</strong></br>' .'</h4>';
                            echo '<p>' . htmlspecialchars($data['article']) . '</br></h4>';
                        $req3->closeCursor(); 
                        }
                    ?>
            </div>
            <div class="col-sm-3">
                <img src="CSS/images/abeille.jpg">
                <?php
                        while ($data = $req4->fetch())
                        {
                            echo '<h4><strong>' . htmlspecialchars($data['titre']) . '</strong></br>' .'</h4>';
                            echo '<p>' . htmlspecialchars($data['article']) . '</br></h4>';
                        $req4->closeCursor(); 
                        }
                    ?>
            </div>
            <div class="col-sm-3">
                <img src="CSS/images/oiseau_perma.jpg">
                <?php
                        while ($data = $req5->fetch())
                        {
                            echo '<h4><strong>' . htmlspecialchars($data['titre']) . '</strong></br>' .'</h4>';
                            echo '<p>' . htmlspecialchars($data['article']) . '</br></h4>';
                        $req5->closeCursor(); 
                        }
                    ?>
        </div>
    </div>
<?php require 'footer.php'?>  
</body>
</html>