<?php
$prod_besteld = 9;

if ($prod_besteld < 20){
    $prijs = 1.70 ;
} elseif ($prod_besteld < 30){
    $prijs = 1.50 ;
} else {
    $prijs = 1.25 ;
}
echo ($prijs);

$prod_besteld = 59;

if ($prod_besteld < 23){
    $prijs = 4.0 ;
} elseif ($prod_besteld < 20){
    $prijs = 1.25 ;
} else {
    $prijs = 1.00 ;
}
echo ($prijs);

$prod_besteld = 43;

if ($prod_besteld < 30){
    $prijs = 2.20 ;
} elseif ($prod_besteld < 60){
    $prijs = 1.55 ;
} else {
    $prijs = 4.00 ;
}
echo ($prijs);
?>