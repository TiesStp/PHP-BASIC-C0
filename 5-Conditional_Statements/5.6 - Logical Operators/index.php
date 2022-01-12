<?php
$test1 = 2;
if ($test1 < 5 && $test1 > 0){
    echo ("getal 1 ligt onder de 5 <br>");
} else {
    echo ("getal 1 ligt boven de 5 <br>");
}
if($test1 < 1 || $test1 >2) {
    echo ("getal 1 ligt onder de 1 en/of boven de 2 <br>");
} else {
    echo ("getal 1 ligt niet onder de 1 en/of boven de 2 <br>");
}
$test2 = 9;
if ($test2 > 8 xor $test2 < 4){
    echo ("getal 2 ligt boven 8 of onder 4 <br>");
} else {
    echo ("getal 2 ligt tussen de 4 en de 8 <br>");
}
if (!$test2 < 10){
    echo ("getal 2 ligt onder de 10 <br>");

} else {
    echo ("getal 2 ligt boven de 10 <br>");
}
?>