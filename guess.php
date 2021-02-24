<?php
$realPrice = 4000;
$priceGuessed = $_POST['guess'];



if ($priceGuessed < $realPrice || $priceGuessed > $realPrice) {
    if ($priceGuessed < $realPrice) {
        echo("vous trop trop bas");
    } else {
        echo("vous trop trop haut");
    }
} else {
    echo("trouver! et c'est bien trop cher, eller hop, a la casse!");
}

?>

<button>
    <a href="index.html">Re-Try</a>
</button>