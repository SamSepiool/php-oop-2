<?php
require_once __DIR__ . '/User.php';

class Premium extends User {

    public $points;


    public function __construct($_name, $_surname, $_email, $_points){

        parent::__construct($_name, $_surname, $_email);
        $this->points = $_points;
    }

    // GET methods
    public function getPoints($_points){

        $this->points = $_points;
    }
    
}