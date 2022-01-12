<?php
function mijnNaamIsGroot(){
    $voornaam = "Ties";
    $achternaam = "Stapper";
    $gehelenaam = "mijn naam is " . $voornaam . " " . $achternaam;
    $gehelenaam = strtoupper($gehelenaam);
    echo ($gehelenaam);
}
mijnNaamIsGroot();
?>