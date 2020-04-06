<!--RECUPERE DONNEES BDD-->

<?php
    function getArticle1(){ //récupère les derniers posts
            $bdd = bddConnexion();
            $reponse1 = $bdd->query('SELECT id, titre, article, date_creation FROM infos WHERE id="1"');
        
        return $reponse1;
    }

    function getArticle2(){
            $bdd = bddConnexion();
            $reponse2 = $bdd->query('SELECT id, titre, article, date_creation FROM infos WHERE id="2"');
        
        return $reponse2;
    }
    
    function getArticleTerre(){
            $bdd = bddConnexion();
            $req = $bdd->query('SELECT id, titre, article FROM terre WHERE id="1"');
        
        return $req;
    }

    function getArticleAnimaux1(){
            $bdd = bddConnexion();
            $req2 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="1"');
        
        return $req2;
    }

    function getArticleAnimaux2(){
            $bdd = bddConnexion();
            $req3 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="2"');
        
        return $req3;
    }

    function getArticleAnimaux3(){
            $bdd = bddConnexion();
            $req4 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="3"');
        
        return $req4;
    }

    function getArticleAnimaux4(){
            $bdd = bddConnexion();
            $req5 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="4"');
        
        return $req5;
    }

/*page commentaires*/
function getPost($postId)
{
    $bdd = bddConnexion();
    $reponse1 = $db->prepare('SELECT id, titre, article, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM infos WHERE id = ?');
    $reponse1->execute(array($idBillet));
    $post = $reponse1->fetch();

    return $post;
}

function getComments($postId)
{
    $bdd = bddConnexion();
    $comments = $db->prepare('SELECT id, auteur, commentaire, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire DESC');
    $comments->execute(array($idBillet));

    return $comments;
}   
    


/*appel BDD*/
    function bddConnexion(){
       try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                return $bdd;
            }
            
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            } 
    }



