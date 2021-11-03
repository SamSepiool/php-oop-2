<?php

class CreditCard {

    public $number;
    public $cvv;
    public $expireDate;


    public function __construct($_number, $_cvv, $_expireDate){

        $this->number = $_number;
        $this->cvv = $_cvv;
        $this->expireDate = $_expireDate;
    }


    // SET methods
    public function setCardNumber($_number){

        // $cardLength = strlen((string)$_cardNum);
        if ( !is_numeric($_number) || strlen($_number) != 16 ) {
            throw new Exception('The card number must be 16 digits long');
        }
        $this->cardNum = $_number;
    }

    public function setExpireDate($_expireDate){

        
        if ( $_expireDate < date("d/m/Y") ) {
            throw new Exception('Card expired');
        }
        $this->expireDate = $_expireDate;
    }

    public function setCvv($_cvv){

        if (!is_numeric($_cvv) || strlen($_cvv) != 3){
            throw new Exception('CVV must be 3 digits long');
        }
        $this->cvv = $_cvv;
    }


    // GET methods
    public function getCardNumber($_number){

        $this->number = $_number;
    }

    public function getCvv($_cvv){

        $this->cvv = $_cvv;
    }

    public function getExpireDate($_expireDate){

        $this->expireDate = $_expireDate;
    }
}