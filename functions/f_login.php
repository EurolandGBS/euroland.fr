<?php
header("Location:index.php");
/*
if (isset($_POST['submit-login'])) {
    extract($_POST);

    if (preg_match('~[=+-/()@#[{}\];]~', $id_tech) || preg_match('~[=+-/()@#[{}\];]~', $pwd_tech)) {
        $error = 1;
    }
    else {
        $pwd_tech = sha1(md5(sha1($pwd_tech)));
        $query = $data->query("SELECT * FROM users WHERE login_users = '$id_tech' AND password_users = '$pwd_tech' AND active = TRUE;");
        if ($fetch = $query->fetch()) {
            $error = 0;

            $_SESSION['id'] = $fetch['id_users'];
            $_SESSION['nom'] = $fetch['name_users'];
            $_SESSION['prenom'] = $fetch['firstname_users'];
            $_SESSION['session'] = true;

            header('Location:index.php?=');
        }
        else {
            $error = 1;
        }
    }
}
?>
<form method="post" style="height: 100%; width: 100%" action="">
    <md-content style="height: 100%; width: 100%; font-size: 20px;">
        <md-input-container style="position: absolute; left: 25%; right: 25%; top: 20px;">
            <label style="color: #aacc44">Identifiant</label>
            <input name="id_tech" style="border-color: #aacc44" type="text" maxlength="20" required>
        </md-input-container>
        <br>
        <md-input-container style="position: absolute; left: 25%; right: 25%; top: 100px">
            <label style="color: #aacc44">Mot de passe</label>
            <input name="pwd_tech" style="border-color: #aacc44" type="password" maxlength="20" required>
        </md-input-container>
        <md-button name="submit-login" class="md-raised" type="submit" style="position: absolute; padding: 10px; left: 40%; top: 180px; background-color: #222222; font-weight: bold; color: #ccaa44;">
            Se connecter
        </md-button>
    </md-content>
</form>
