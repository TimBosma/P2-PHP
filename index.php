<?php

// Zorg ervoor dat je de juiste autoloader gebruikt of include de bestanden handmatig.
require_once 'src/Products/product.php';
require_once 'src/Products/game.php';
require_once 'src/Products/movie.php';

use Products\game;
use Products\movie;

// Maak producten
$game = new game("Game 1", 50, 5, 10, "A fun action game");
$game->setGenre("Action");
$game->addRequirements("4GB RAM");
$game->addRequirements("Windows 10");

$movie = new movie("Movie 1", 30, 3, 5, "An exciting adventure movie");
$movie->setQuality("HD");

// Toon de producten in een tabel
echo "<h1>Product Information</h1>";
$game->printInfo();
$movie->printInfo();
?>
