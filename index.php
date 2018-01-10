<?php
/**
 * EUROLAND.FR
 *
 * Author :     Thomas MUSSET
 * Date :       2017-12-04 / 2017-12-28
 * Project :    Euroland
 * IDE :        IntelliJ IDEA 2017.2.6
 *
 * PROJECT VERSION 1.0
 */


$p = "p";
if(!isset($_GET[$p]) || $_GET[$p] == ""){
    $page = 'home';
}
else{
    $files_array = scandir("./contents");
    $files = "";
    foreach($files_array as $value){
        $exp_value = explode('.', $value);
        if($exp_value[0] == $_GET[$p]){
            $files = $exp_value[0];
        }
    }
    if($_GET[$p] == $files){
        $page = $files;
    }
    else{
        $page = "404";
    }
}

ob_start();
    require "contents/".$page.".php";
    $content = ob_get_contents();
ob_end_clean();

include "layout.php";