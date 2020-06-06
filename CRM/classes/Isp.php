<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Isp
 *
 * @author GOF
 */
class Isp {
    
    private $Name;
    private $ID;
    
    function __construct() {
    }

    
    
    public function getName() {
        return $this->Name;
    }

    public function getID() {
        return $this->ID;
    }

    function setName($Name) {
        $this->Name = $Name;
    }

    function setID($ID) {
        $this->ID = $ID;
    }


    
    
}
