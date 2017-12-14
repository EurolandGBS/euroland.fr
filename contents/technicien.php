<div class="technicien">
    <md-toolbar style="background-color: #444444; text-align: center; color: #ccaa44">
        <h4 class="md-flex">ESPACE TECHNICIEN</h4>
    </md-toolbar>
    <?php
    if (!isset($_SESSION['session'])) {
        include_once './functions/f_login.php';
    }
    else {
        include_once './functions/f_logout.php';
    }
    ?>
</div>