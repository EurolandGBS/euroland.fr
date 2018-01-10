<?php
if (!isset($_GET['err'])) {
    header("Location:./index.php");
}
else {
    if($_GET['err'] == 1) {
        ?>
        <p style="font-size: 0.8em; color: green; text-align: center; margin-left: auto; margin-right: auto;">
            Votre demande a bien été envoyé à notre service commercial.<br />
            Nous vous répondrons dans les plus brefs délais.<br />
            Merci !
        </p>
        <?php
    }
    elseif ($_GET['err'] == 2) {
        ?>
        <p style="font-size: 0.8em; color: red; text-align: center; margin-left: auto; margin-right: auto;">
            Attention !<br />
            Vous n'avez pas rempli tous les champs.<br />
            Merci de vérifier !
        </p>
        <?php
    }
    elseif ($_GET['err'] == 3) {
        ?>
        <p style="font-size: 0.8em; color: green; text-align: center; margin-left: auto; margin-right: auto;">
            Vos informations ont bien été envoyées à notre service technique. <br />
            Nous prendrons contact avec vous dans un délai de 48h.<br />
            Merci !
        </p>
        <?php
    }
    elseif ($_GET['err'] == 4) {
        ?>
        <p>
            Attention !<br />
            Vous n'avez pas rempli tous les champs obligatoires !<br />
            Merci de vérifier vos données en cliquant sur ce bouton<br />
            <form>
                <input type="button" value="Vérification" onclick="history.go(-1)">
            </form>
        </p>
        <?php
    }
    else {
        header("Location:./index.php");
    }
}