<?php
function geefTienProcentKorting() {
    $koopprijs = 75;
    $korting = 10;
    $korting = ($koopprijs / 100) * $korting;
    return $koopprijs - $korting;
}
function totaleBedrag() {
    echo ("Het totale bedrag is " . geefTienProcentKorting() . " Euro");
}
totaleBedrag()
?>