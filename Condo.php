<h1>Condo Canyon</h1>
<img src="public/img/Condo_Canyon.png" alt="Condo">
<?php
include 'classes/fortnite.php';
include_once "./theme-switch.php";

$condo = new fortnite("Condo Canyon", "Medium loot", "Condo Canyon was a Named Location in Fortnite: Battle Royale, that was added in Update v19.00 to the island Artemis. Condo Canyon was located at east of Chonker's Speedway, south of The Joneses and Shuffled Shrines.");
global $var;
echo $condo->getTownName();
?>
<br>

<a href="home.php">Terug naar home</a>