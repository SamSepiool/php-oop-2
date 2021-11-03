<?php

class Product {

    public $category;
    public $name;
    public $price;

    public function __construct($_category, $_name, $_price){

        $this->category = $_category;
        $this->name = $_name;
        $this->price = $_price;
    }


    // SET methods
    public function setCategory($_category) {

        if ( !is_string($_category) ) {
            throw new Exception('Product category must be a string');
        }
        $this->category = $_category;
    }

    public function setName($_name) {

        if ( !is_string($_name) ) {
            throw new Exception('Product name must be a string');
        }
        $this->name = $_name;
    }

    public function setPrice($_price) {
        
        if ( !is_numeric($_price) ) {
            throw new Exception('Product price must be a number');
        }
        $this->price = $_price;
    }

    // GET methods
    public function getCategory($_category){

        $this->category = $_category;
    }

    public function getName($_name){

        $this->name = $_name;
    }

    public function getPrice($_price){

        $this->price = $_price;
    }
    
    
        
    

}