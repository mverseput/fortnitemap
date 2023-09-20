
<h1>Greasy Grove</h1>
<?php
include_once "./theme-switch.php";

?>

<img src="public/img/Greasy_Grove.png" alt="rocky">

<?php
include_once "./theme-switch.php";
include 'classes/fortnite.php';
$greasy = new fortnite("Greasy Grove", "High loot", "Greasy Grove was a Named Location on the southwest side of the Battle Royale Map. Its most famous attraction was the Durrr Burger restaurant prior to Season X, when it got replaced by a Tacos restaurant.");
global $var;
echo $greasy->getTownName()
?>
<br>
<a href="home.php">Terug naar home</a>
