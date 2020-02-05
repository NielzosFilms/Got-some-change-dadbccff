<?php
    $geld = intval($argv[1]);
    if($geld > 0) {
        echo($geld." X 1 euro");
    }else {
        echo("Geen wisselgeld");
    }
?>