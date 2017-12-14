<?php
if (isset($_GET['mail'])) {
    mail('t.musset@outlook.com', 'Sujet test', 'Message test');
}
else {
    header('Location:../index.php');
}