<html lang="fr">
    <head>
        <meta charset="UTF-8">
    </head>
</html>
<?php
    if(isset($_POST['contact-val'])) {
        //extract($_POST);

        // TEST ECHO
        /*
        echo $soc."<br>";
        echo $nom."<br>";
        echo $pre."<br>";
        echo $adr."<br>";
        echo $adr2."<br>";
        echo $vil."<br>";
        echo $cod."<br>";
        echo $mai."<br>";
        echo $tel."<br>";
        echo $por."<br>";
        echo $dem;
        */
        // =========

        if(!isset($_POST['soc'])) {$_POST['soc'] = "";}
        if(!isset($_POST['nom'])) {$_POST['nom'] = "";}
        if(!isset($_POST['pre'])) {$_POST['pre'] = "";}

        if(!isset($_POST['adr'])) {$_POST['adr'] = "";}
        if(!isset($_POST['adr2'])) {$_POST['adr2'] = "";}
        if(!isset($_POST['vil'])) {$_POST['vil'] = "";}
        if(!isset($_POST['cod'])) {$_POST['cod'] = "";}

        if(!isset($_POST['mai'])) {$_POST['mai'] = "";}
        if(!isset($_POST['tel'])) {$_POST['tel'] = "";}
        if(!isset($_POST['por'])) {$_POST['por'] = "";}

        if(!isset($_POST['dem'])) {$_POST['dem'] = "";}

        $headers = 'From: "www.euroland.fr" <postmaster@euroland.fr>'."\n";

        $societe=$_POST['soc'];
        $nom=$_POST['nom'];
        $prenom=$_POST['pre'];

        $adresse=$_POST['adr'];
        $adresse2=$_POST['adr2'];
        $ville=$_POST['vil'];
        $cp=$_POST['cod'];

        $cemail=$_POST['mai'];
        $tel01=$_POST['tel'];
        $tel02=$_POST['por'];

        $message=$_POST['dem'];

        if ($societe!="" && $nom!="" && $prenom!="" && $cemail!="" && $tel01!="" && $adresse!="" && $cp!="" && $ville!="" && $message!="") {
            mail("info@euroland.fr" ,
                "Demande de renseignements" ,
                "Société : ".$societe."\n".
                "Nom : ".$nom."\n".
                "Prénom : ".$prenom."\n".
                "Email : ".$cemail."\n".
                "Téléphone : ".$tel01." ".$tel02."\n".
                "Adresse : ".$adresse." ".$adresse2." ".$cp." ".$ville."\n".
                "Message : ".$message, $headers);

            header("Location:../index.php?p=message&err=1");
            ?>
            <!--
            <p style='font-size: 0.8em; color: green; text-align: center;'>Votre demande a bien été envoyé à notre service commercial.<br />Nous vous répondrons dans les plus brefs délais.<br />Merci !</p>
            <p>Cliquez <a href="../index.php">ICI</a> pour revenir sur la page d'accueil.</p>
            -->
            <?php

        }
        else {
            header("Location:../index.php?p=message&err=2");
            ?>
            <!--
            <p style='font-size: 0.8em; color: red; text-align: center;'>Attention !<br />Vous n'avez pas rempli tous les champs.<br />Merci de vérifier !</p>
            <p>Cliquez <a href="../index.php">ICI</a> pour revenir sur la page d'accueil.</p>
            -->
            <?php
        }
    }

    if(isset($_POST['support-val'])) {

        // TEST ECHO
        //print_r($_POST);
        // =========

        if (!isset($_POST['nom']))$_POST['nom']='';
        if (!isset($_POST['pre']))$_POST['pre']='';
        if (!isset($_POST['ent']))$_POST['ent']='';
        if (!isset($_POST['num']))$_POST['num']='';
        if (!isset($_POST['mai']))$_POST['mai']='';
        if (!isset($_POST['tel']))$_POST['tel']='';
        if (!isset($_POST['por']))$_POST['por']='';
        if (!isset($_POST['mod']))$_POST['mod']='';
        if (!isset($_POST['mar']))$_POST['mar']='';
        if (!isset($_POST['ser']))$_POST['ser']='';
        if (!isset($_POST['tser']))$_POST['tser']='';
        if (!isset($_POST['sys']))$_POST['sys']='';
        if (!isset($_POST['pb1']))$_POST['pb1']='';
        if (!isset($_POST['pb2']))$_POST['pb2']='';
        if (!isset($_POST['pb3']))$_POST['pb3']='';
        if (!isset($_POST['pb4']))$_POST['pb4']='';
        if (!isset($_POST['det']))$_POST['det']='';

        $headers = 'From: "www.euroland.fr" <postmaster@euroland.fr>'."\n";
        $nom=$_POST['nom'];
        $prenom=$_POST['pre'];
        $nclient=$_POST['num'];
        $tel1=$_POST['tel'];
        $tel2=$_POST['por'];
        $cemail=$_POST['mai'];
        $entreprise=$_POST['ent'];
        $mod=$_POST['mod'];
        $ref=$_POST['mar'];
        $server=$_POST['ser'];
        $typesrv=$_POST['tser'];
        $sys=$_POST['sys'];
        $pb1=$_POST['pb1'];
        $pb2=$_POST['pb2'];
        $pb3=$_POST['pb3'];
        $pb4=$_POST['pb4'];
        $details=$_POST['det'];
        if ($nom!="" && $prenom!="" && $nclient!="" && $tel1!="" && $cemail!="" && $entreprise!="" && $mod!="" && $ref!="" && $sys!="" && $details!="" || $pb1!="" || $pb2!="" || $pb3!="" || $pb4!="" && $_SERVER['HTTP_REFERER']=="http://www.euroland.fr/global_bureautique_solutions/mail.php") {
            mail("support@euroland.fr" ,
                "Demande d'intervention" ,
                "Nom : ".$nom."\n".
                "Prénom : ".$prenom."\n".
                "Téléphones : ".$tel1." ".$tel2."\n".
                "Numéro Client : ".$nclient."\n".
                "Email : ".$cemail."\n".
                "Entreprise : ".$entreprise."\n".
                "Type de copieur : ".$ref." ".$mod."\n".
                "Serveur : ".$server." ".$typesrv."\n".
                "Systèmes d'Exploitations : ".$sys."\n".
                "Types de problèmes : ".$pb1." ".$pb2." ".$pb3." ".$pb4."\n".
                "Détails du problème : ".$details , $headers);

            header("Location:../index.php?p=message&err=3");
            ?>
            <!--
            <p class='ok'>Vos informations ont bien été envoyées à notre service technique. <br />Nous prendrons contact avec vous dans un délai de 48h. Merci<br /><br /></p>
            <p>Cliquez <a href="../index.php">ICI</a> pour revenir sur la page d'accueil.</p>
            -->
        <?php	}
        else {
            header("Location:../index.php?p=message&err=4");
            ?>
            <!--
            <p class='error'>Attention !<br />Vous n'avez pas rempli tous les champs obligatoires !<br />Merci de vérifier vos données en cliquant sur ce bouton<br /><br /><form style='text-align: center;'><input type='button' value='Vérification' onclick='history.go(-1)'></form></p>
            <p>Cliquez <a href="../index.php">ICI</a> pour revenir sur la page d'accueil.</p>
            -->
            <?php
        }
    }
    ?>