<!--RECUPERE DONNEES BDD-->

<?php
    function getArticle1(){ //récupère les derniers posts
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            }
            $reponse1 = $bdd->query('SELECT id, titre, article, date_creation FROM infos WHERE id="1"');
        
        return $reponse1;
    }
    
?>

<?php
    function getArticle2(){
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            }
            $reponse2 = $bdd->query('SELECT id, titre, article, date_creation FROM infos WHERE id="2"');
        
        return $reponse2;
    }
    
?>

<?php
    function getArticleTerre(){
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            }
            $req = $bdd->query('SELECT id, titre, article FROM terre WHERE id="1"');
        
        return $req;
    }
?>

<?php
    function getArticleAnimaux1(){
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            }
            $req2 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="1"');
        
        return $req2;
    }
?>

<?php
    function getArticleAnimaux2(){
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            }
            $req3 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="2"');
        
        return $req3;
    }
?>

<?php
    function getArticleAnimaux3(){
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            }
            $req4 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="3"');
        
        return $req4;
    }
?>

<?php
    function getArticleAnimaux4(){
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=permaculture', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                        die('Erreur : '.$e->getMessage());
            }
            $req5 = $bdd->query('SELECT id, titre, article FROM animaux WHERE id="4"');
        
        return $req5;
    }
?>