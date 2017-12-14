<?php
include './functions/f_layout.php';
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <title>Euroland G.B.S.</title>

        <meta charset="UTF-8">
        <meta name="generator" content="IntelliJ IDEA">
        <meta name="author" content="Euroland">
        <meta name="keywords" content="euroland,bureautique,professionnel,communication,diffusion,copieur,imprimante,solution,scan,scanner,fax,reseau,informatique,canon,develop,paris,tulle,photocopieur,multifonctions">
        <meta name="description" content="Euroland Global Bureautique Solutions vous propose des moyens efficaces et performants de gagner du temps des la gestion de vos documents : impressions, copies, scans, archivages numériques sur serveur, réseau. Demandez, nous avons la solution.">

        <link rel="stylesheet" type="text/css" href="./plugins/slick-master/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="./plugins/slick-master/slick/slick-theme.css"/>

        <link rel="stylesheet" href="./css/angular-material.min.css">
        <link rel="stylesheet" href="./css/angular-complement.css">

        <script src="./javascript/angular.min.js"></script>
        <script src="./javascript/angular-animate.js"></script>
        <script src="./javascript/angular-aria.min.js"></script>
        <script src="./javascript/angular-message.min.js"></script>
        <script src="./javascript/angular-material.min.js"></script>
        <script src="./javascript/jquery-3.1.1.min.js"></script>

        <script src="./javascript/angular-demo.js"></script>
        <script src="./javascript/nav-menu.js"></script>

        <link rel="icon" type="image/ico" href="./images/favicon.ico">
    </head>
    <body ng-app="autocompleteDemo" ng-cloak>
        <md-toolbar class="" style="height: 80px; background-color: #444444; top: 0; position: fixed; border-bottom: 1px solid #aacc44;">
            <a href="index.php"><img src="./images/logogbs.png" style="position: absolute; width: 80; top: 20; left: 20;"></a>
            <form method="post" action="">
                <md-button name="produits" type="submit" class="md-raised" style="padding: 10px; left: 150px; top: 5px; background-color: #222222; font-weight: bold; color: #aacc44;">Produits</md-button>
                <md-button name="solutions" type="submit" class="md-raised" style="padding: 10px; left: 150px; top: 5px; background-color: #222222; font-weight: bold; color: #aacc44;">Solutions</md-button>
                <md-button name="support" type="submit" class="md-raised" style="padding: 10px; left: 150px; top: 5px; background-color: #222222; font-weight: bold; color: #aacc44;">Support</md-button>
                <md-button name="contact" type="submit" class="md-raised" style="padding: 10px; left: 150px; top: 5px; background-color: #222222; font-weight: bold; color: #aacc44;">Contact</md-button>

                <md-button name="reprographie" type="submit" class="md-raised" style="padding: 10px; left: 200px; top: 5px; background-color: #222222; font-weight: bold; color: #aacc44;">Reprographie</md-button>
                <!--
                <md-button name="technicien" type="submit" class="md-raised" style="padding: 10px; left: 250px; top: 5px; background-color: #222222; font-weight: bold; color: #ccaa44;">Espace technicien</md-button>
                -->
            </form>
            <!--<a md-ink-ripple href="index.php?p=produits" class="md-button md-raised" style="width: 50px; background-color: #222222; font-weight: bold; color: #aacc44;">Produit</a>-->
        </md-toolbar>

        <div class="content">
            <div class="content-scroll">
                <?php
                echo $content;
                ?>
            </div>
        </div>

        <md-toolbar class="" style="height: 120px; background-color: #444444; bottom: 0; position: fixed; border-top: 1px solid #aacc44";>
            <div class="footer">
                <div class="footer-left">
                    <p>Euroland - <label style="font-size: 13px;">Île de France</label></p>
                    <p>20, rue Berthe Morisot 95220 Herblay</p>
                    <p style="margin-top: -12px"><font color="#aacc44">T. 01 34 44 24 54</font> - F. 01 34 44 24 55</p>
                    <p style="margin-top: -12px; font-size: 13px;"><a href="./functions/f_mail.php?mail=1">info@euroland.fr</a></p>
                    <p style="margin-top: -12px; font-size: 10px;">© 2015 Euroland S.A - au capital de 152 449€ - RCS 381 770 890</p>
                </div>
                <div class="footer-right">
                    <p>Euroland - <label style="font-size: 13px;">Sud Ouest</label></p>
                    <p>39, rue Docteur Valette 19000 Tulle</p>
                    <p style="margin-top: -12px"><font color="#aacc44">T. 05 44 40 58 34</font> - F. 05 55 29 07 34</p>
                    <p style="margin-top: -12px; font-size: 13px;"><a href="./functions/f_mail.php?mail=2">contact@euroland.fr</a></p>
                    <p style="margin-top: -12px; font-size: 10px;">© 2015 Euroland S.A.S.U • au capital de 5 000€ • RCS 808 987 424</p>
                </div>
            </div>
        </md-toolbar>

        <script type="text/javascript" src="./javascript/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="./javascript/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="./plugins/slick-master/slick/slick.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.carousel').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: false,
                    infinite: true,
                    fade: true,
                    cssEase: 'linear'
            });
            });
        </script>
    </body>
</html>