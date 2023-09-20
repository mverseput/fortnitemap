<h1>Sleepy Sound</h1>
<img src="public/img/Sleepy_Sound.png" alt="rocky">

<?php
include 'classes/fortnite.php';
include_once "./theme-switch.php";

$sleepy = new fortnite("Sleepy Sound", "High loot", "Sleepy Sound was a Named Location in Fortnite: Battle Royale that was first released in Chapter 3: Season 1. It is located Northeast of Shifty Shafts and North of Coney Crossroads. It is a coastal town with houses, shops, and a restaurant called Sticks.");
global $var;
echo $sleepy->getTownName();
?>
<br>
<a href="home.php">Terug naar home</a>
