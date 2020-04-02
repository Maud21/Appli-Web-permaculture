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
        <?php
            include 'header.php';
        ?>
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
                                <span><a href="commentaires.php?infos=<?php echo $data['id']; ?>">Laisser un commentaires</a></span>
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
                    <span><a href="commentaires.php?infos=<?php echo $data['id']; ?>">Laisser un commentaires</a></span>
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
            <span><a href="commentaires.php?infos=<?php echo $data['id']; ?>">Laisser un commentaires</a></span>

        <?php
            }
            $req->closeCursor(); 
        ?>
    </div>
<!--LES OUTILS-->
    <div id="outils">
        <h2>LES OUTILS</h2>
        </div>
    <div class="image_outils">
<!--outils
        <div class="container" id="bloc_outils">
            <div class="row">
                <div class="col-sm-3">
                    <span>La binette</span>
                </div>
                <div class="col-sm-3">
                    <span>Le croc</span>
                </div>
                <div class="col-sm-3">
                    <span>La faux</span>
                </div>
                <div class="col-sm-3">
                    <span>La fourche-bêche</span>
                </div>
            </div>
        </div>
       
        <div class="container" id="bloc_outils2">
            <div class="row">
                <div class="col-sm-3">
                    <span>La grelinette</span>
                </div>
                <div class="col-sm-3">
                    <span>La houe</span>
                </div>
                <div class="col-sm-3">
                    <span>Le plantoir</span>
                </div>
                <div class="col-sm-3">
                    <span>Le sarcloir</span>
                </div>
            </div>
        </div>
        <div class="container" id="bloc_outils3">
            <div class="row">
                <div class="col-sm-3">
                    <span>Le semoir</span>
                </div>
                <div class="col-sm-3">
                    <span>La serfouette</span>
                </div>
            </div>
        </div>
        -->
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
<?php include 'footer.php'?>  
</body>
</html>