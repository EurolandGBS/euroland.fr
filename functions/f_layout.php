<?php
if (isset($_POST['produits'])) {
    header('Location:index.php?p=produits');
}
if (isset($_POST['support'])) {
    header('Location:index.php?p=support');
}
if (isset($_POST['solutions'])) {
    header('Location:index.php?p=solutions');
}
if (isset($_POST['contact'])) {
    header('Location:index.php?p=contact');
}
if (isset($_POST['reprographie'])) {
    header('Location:index.php?p=reprographie');
}
/*
if (isset($_POST['technicien'])) {
    header('Location:index.php?p=technicien');
}
*/