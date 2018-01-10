<style type="text/css">
    .mail	{
        width: 900px;
        height: 250px;
        margin-top: 150px;
        margin-left: 200px;
        background: url(./img/fond_mail.png) no-repeat;
        font-family: 'Century Gothic',Verdana;
        text-align: center;
    }

    .ok	{
        padding-top: 50px;
        color: green;
    }

    .error	{
        padding-top: 50px;
        color: red;
    }
</style>
<div id="global">
    <div class="mail">
        <?php
        $headers = 'From: "www.euroland.fr" <postmaster@euroland.fr>'."\n";
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $nclient=$_POST['nclient'];
        $tel1=$_POST['tel1'];
        $tel2=$_POST['tel2'];
        $cemail=$_POST['cemail'];
        $dom=$_POST['dom'];
        $ext=$_POST['ext'];
        $entreprise=$_POST['entreprise'];
        $mod=$_POST['mod'];
        $ref=$_POST['ref'];
        $server=$_POST['server'];
        $typesrv=$_POST['typesrv'];
        $sys=$_POST['sys'];
        $pb1=$_POST['pb1'];
        $pb2=$_POST['pb2'];
        $pb3=$_POST['pb3'];
        $pb4=$_POST['pb4'];
        $details=$_POST['details'];
        $envoyer=$_POST['envoyer'];
        if ($nom!="" && $prenom!="" && $nclient!="" && $tel1!="" && $cemail!="" && $dom!="" && $ext!="" && $entreprise!="" && $mod!="" && $ref!="" && $sys!="" && $details!="" || $pb1!="" || $pb2!="" || $pb3!="" || $pb4!="" && $_SERVER['HTTP_REFERER']=="http://www.euroland.fr/global_bureautique_solutions/mail.php") {
            mail("support@euroland.fr" ,
                "Demande d'intervention" ,
                "Nom : ".$nom."\n".
                "Prénom : ".$prenom."\n".
                "Téléphones : ".$tel1." ".$tel2."\n".
                "Numéro Client : ".$nclient."\n".
                "Email : ".$cemail."@".$dom.$ext."\n".
                "Entreprise : ".$entreprise."\n".
                "Type de copieur : ".$ref." ".$mod."\n".
                "Serveur : ".$server." ".$typesrv."\n".
                "Systèmes d'Exploitations : ".$sys."\n".
                "Types de problèmes : ".$pb1." ".$pb2." ".$pb3." ".$pb4."\n".
                "Détails du problème : ".$details , $headers);
            echo "<p class='ok'>Vos informations ont bien été envoyées à notre service technique. <br />Nous prendrons contact avec vous dans un délai de 48h. Merci<br /><br /></p>";
            ?> <p>Vous pouvez fermer cette fenêtre.</p>
        <?php	}
        else {
            if ($envoyer == "envoyer") {
                echo "<p class='error'>Attention !<br />Vous n'avez pas rempli tous les champs obligatoires !<br />Merci de vérifier vos données en cliquant sur ce bouton<br /><br /><form style='text-align: center;'><input type='button' value='Vérification' onclick='history.go(-1)'></form></p>"; }
        }
        ?>
    </div>
</div>