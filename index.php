<!--intermédiaire entre modèle et vue-->
<!--CONTROLEUR-->

<?php
    require('modele.php');

    $reponse1 = getArticle1();
    $reponse2 = getArticle2();
    $req = getArticleTerre();
    $req2 = getArticleAnimaux1();
    $req3 = getArticleAnimaux2();
    $req4 = getArticleAnimaux3();
    $req5 = getArticleAnimaux4();

    require('indexView.php');
