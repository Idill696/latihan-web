<?php
$NegaraASEAN = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping for array</title>
</head>
<body>
    <?php

   foreach ($NegaraASEAN as $Negara) {
        echo "<li>$Negara</li>";
   }
    
    ?>
</body> 
</html>