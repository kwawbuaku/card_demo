<?php

require_once('../Deck.php');

class DeckTest extends PHPUnit_Framework_TestCase {

    public $deckOfCards;

    public function setUp()
    {
        $this->deckOfCards = new Deck();
    }

    public function testDealAllCards()
    {
        for($i = 0; $i < 60; $i++)
        {
            $this->deckOfCards->dealCard();
        }

        $this->assertFalse($this->deckOfCards->dealCard());
    }


    public function tearDown()
    {
        $this->deckOfCards = new Deck();
    }
}
?>