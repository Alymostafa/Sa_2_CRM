<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Country
 *
 * @author GOF
 */
class Country {
    
    private $c_id;
    private $c_Name;
    
    function __construct() {
   
    }

    
    function getC_id() {
        return $this->c_id;
    }

    function getC_Name() {
        return $this->c_Name;
    }

    function setC_id($c_id) {
        $this->c_id = $c_id;
    }

    function setC_Name($c_Name) {
        $this->c_Name = $c_Name;
    }


}
