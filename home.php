<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>fortnite-map</title>
</head>
<?php
include_once "./theme-switch.php";
?>
<body id="fortnite-map">
<?php
// class MapObject {

//     public $x;
//     public $y;
//     public $name;

//     public function __construct($x, $y, $name)
//     {
//         $this->x = $x;
//         $this->y = $y;
//         $this->name = $name;


//     }
// }


// $objects = array(
//     new MapObject("799,520","874,597", "Tilted Towers"),
//     new MapObject("660,713","727,780","Greasy Grove"),
//     new MapObject("860,794","934,848","Rocky Reels"),
//     new MapObject(700,800,"Sleepy Sound"),
//     new MapObject(900,1000,"Object 5"),


// )

include 'classes/fortnite.php';
$tilted = new fortnite("Tilted towers", "High Loot", "Tilted Towers is een van de grootste locaties in Fortnite: Battle Royale. Tilted Towers staat bekend als een plek waar veel goede loot te halen is. Hierdoor landen er ook vaak veel spelers tijdens een spel, wat weer resulteert in veel gevechten.");
$greasy = new fortnite("Greasy Grove", "High loot", "Greasy Grove was a Named Location on the southwest side of the Battle Royale Map. Its most famous attraction was the Durrr Burger restaurant prior to Season X, when it got replaced by a Tacos restaurant.");
$rocky = new fortnite("Rocky Reels", "Medium loot", "Rocky Reels was a Named Location in Fortnite: Battle Royale that was added in Chapter 3: Season 1. It is located in the desert towards the south of Artemis.");
$sleepy = new fortnite("Sleepy Sound", "High loot", "Sleepy Sound was a Named Location in Fortnite: Battle Royale that was first released in Chapter 3: Season 1. It is located Northeast of Shifty Shafts and North of Coney Crossroads. It is a coastal town with houses, shops, and a restaurant called Sticks.");
$condo = new fortnite("Condo Canyon", "Medium loot", "Condo Canyon was a Named Location in Fortnite: Battle Royale, that was added in Update v19.00 to the island Artemis. Condo Canyon was located at east of Chonker's Speedway, south of The Joneses and Shuffled Shrines.");

?>
<img src="public/img/fortnite-map.png" alt="Fortnite" usemap="#workmap">

<map name="workmap">
    <area shape="rect" coords="799,520,874,597" alt="Tilted" href="Tilted.php">
    <area shape="rect" coords="660,713,727,780" alt="Greasy" href="Greasy.php">
    <area shape="rect" coords="860,794,934,848" alt="Rocky" href="Rocky.php">
    <area shape="rect" coords="1139,831,1245,918" alt="Condo" href="Condo.php">
    <area shape="rect" coords="990,142,1093,263" alt="Sleepy" href="Sleepy.php">
</map>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

