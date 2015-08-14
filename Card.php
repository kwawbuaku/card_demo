<?php

class Card
{
    private $suitName;
    private $cards;

    function __construct($suitName)
    {
        $this->suitName = $suitName;
        $this->cards = array('King', 'Queen', 'Jack', '10', '9', '8', '7', '6', '5', '4', '3', '2', 'Ace');
    }

    /**
     * Change the order of the cards
     */
    public function shuffleCards()
    {
        shuffle($this->cards);
    }

    public function getSuitName()
    {
        return $this->suitName;
    }

    /**
     * A card would be distributed from the cards array
     */
    public function dealCard()
    {
        if (count($this->cards) >= 1) {
            return array_shift($this->cards);
        } else {
            return false;
        }
    }

    public function getCards()
    {
        return $this->cards;
    }
}

?>