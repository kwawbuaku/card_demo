<?php

require_once('Card.php');

class Deck
{
    private $deckOfCards;

    function __construct()
    {
        $this->deckOfCards = array();

        $this->addToArray("Hearts");
        $this->addToArray("Clubs");
        $this->addToArray("Spades");
        $this->addToArray("Diamonds");
    }

    public function shuffleCards()
    {
        shuffle($this->deckOfCards);

        foreach ($this->deckOfCards as $card) {
            $card->shuffleCards();
        }
    }

    public function dealCard()
    {
        if (!empty($this->deckOfCards)) {
            $chooseSuit = array_rand($this->deckOfCards);
            $card = $this->deckOfCards[$chooseSuit];
            $selectedCard = $card->dealCard();
            if ($selectedCard != " ") {
                $cardMessage = $selectedCard . " of " . $card->getSuitName();
                if (count($card->getCards()) == 0) {
                    unset($this->deckOfCards[$card->getSuitName()]);
                }
                return $cardMessage;
            } else {
                $this->clearUp($selectedCard);
            }
        } else {
            return false;
        }

    }

    private function addToArray($suitName)
    {
        $cardCollection = new Card($suitName);
        $this->deckOfCards[$suitName] = $cardCollection;
    }

    /**
     * Removes empty arrays
     */
    public function clearUp($suitName)
    {
        unset($this->deckOfCards[$suitName]);
        $this->dealCard();
    }
}


?>