<h1>Tilted Towers</h1>
<img src="public/img/Tilted_Towers.png" alt="rocky">

<?php
include 'classes/fortnite.php';
include_once "./theme-switch.php";
$tilted = new fortnite(" Tilted towers", " High Loot", "Tilted Towers is een van de grootste locaties in Fortnite: Battle Royale. Tilted Towers staat bekend als een plek waar veel goede loot te halen is. Hierdoor landen er ook vaak veel spelers tijdens een spel, wat weer resulteert in veel gevechten.");
global $var;
echo $tilted->getTownName();
?>
<br>
<a href="home.php">Terug naar home</a>
