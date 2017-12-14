<?php
header("Location:index.php");
/*
if (isset($_POST['submit-logout'])) {
    session_destroy();
    header("Location:index.php");
}
?>
<form method="post" style="height: 100%; width: 100%" action="">
    <md-content style="height: 100%; width: 100%; font-size: 20px;">
        <md-button name="submit-logout" class="md-raised" type="submit" style="position: absolute; padding: 10px; left: 38%; top: 180px; background-color: #222222; font-weight: bold; color: #ccaa44;">
            Se déconnecter
        </md-button>
    </md-content>
</form>
