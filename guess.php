<?php
    $realPrice = 4000;
    $priceGuessed = $_POST['guess'];

    if ($priceGuessed < $realPrice || $priceGuessed > $realPrice) {
        if ($priceGuessed < $realPrice) {
            echo("vous etes trop bas");
        } else {
            echo("vous etes trop haut");
        }
    } else {
        echo("trouver! et c'est bien trop cher, aller hop, a la casse!");
    }

?>

<button>
    <a href="index.php">Re-Try</a>
</button>