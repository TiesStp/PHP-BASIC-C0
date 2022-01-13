<?php  
    $leeftijd = 16;
?>
<html>
<head>
</head>
<body>
    <div id="IsMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h1>Je bent te jong om deze pagina te zien</h1>";
            }
        ?>
    </div>

</body>
</html>