<?php

require_once('../Card.php');

class CardTest extends PHPUnit_Framework_TestCase {

    public $card;

    public function setUp()
    {
        $this->card = new Card("Spade");
    }

    public function testArrayNotEmpty()
    {
        $this->assertCount(13, $this->card->getCards());
    }

    public function testGetName()
    {
        $this->assertEquals('Spade', $this->card->getSuitName());
    }

    /**
     * Check that the shuffling the cards by changing the order has not added or
     * removed any variables
     */
    public function testArraySame()
    {
        $temp = array('King','Queen','Jack','10','9','8','7','6','5','4','3','2','Ace');
        $this->card->shuffleCards();
        $this->assertEmpty(array_diff($temp, $this->card->getCards()));
    }

    public function testDealCard()
    {
        $this->card->dealCard();
        $this->assertNotEquals(13, $this->card->getCards());
    }
}

?>