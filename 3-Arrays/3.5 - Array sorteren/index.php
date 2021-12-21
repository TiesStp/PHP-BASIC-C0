<?php
$getallen = array( 676, 5345, 78657, 3, 47, 21, 47);

asort($getallen);

$laag_naar_hoog = array( 3, 21, 47, 47, 676, 5345, 78657);
print_r($laag_naar_hoog);

arsort($getallen);

$hoog_naar_laag = array( 78657, 5345 , 676, 47, 47, 21, 3);
print_r($hoog_naar_laag);

?>