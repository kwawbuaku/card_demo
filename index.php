<?php
require_once("Player.php");
require_once("Deck.php");

$players = array(new Player("Player One"), new Player("Player Two"), new Player("Player Three"), new Player("Player Four"));

$deckOfCards = new Deck();
$deckOfCards->shuffleCards();

// Deal the cards to the player
for ($i = 0; $i < 7; $i++) {
    foreach ($players as $player) {
        $player->addCard(
            $deckOfCards->dealCard()
        );
    }
}

// Display cards and information
foreach ($players as $player) {
    echo "<h1>{$player->getName()}</h1>";
    echo $player->showCards();
}

?>