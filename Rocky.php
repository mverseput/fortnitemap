<!DOCTYPE html>
<h1>Rocky Reels</h1>
<img src="public/img/Rocky_Reels.png" alt="rocky">

<?php
include 'classes/fortnite.php';
include_once "./theme-switch.php";

$rocky = new fortnite("Rocky Reels", "Medium loot", "Rocky Reels was a Named Location in Fortnite: Battle Royale that was added in Chapter 3: Season 1. It is located in the desert towards the south of Artemis.");
global $var;
echo $rocky->getTownName();
?>
<br>
<a href="home.php">Terug naar home</a>
