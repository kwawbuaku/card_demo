<?php

class Player
{

    private $name;
    private $cards;

    function __construct($name)
    {
        $this->name = $name;
        $cards = array();
    }

    public function addCard($card)
    {
        $this->cards[] = $card;
    }

    public function showCards()
    {
        $cardsInHand = "";
        foreach ($this->cards as $card) {
            $cardsInHand .= "<br>{$card}";
        }
        return $cardsInHand;
    }

    public function getName()
    {
        return $this->name;
    }

}

?>