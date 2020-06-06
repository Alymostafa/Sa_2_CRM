<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DialUp
 *
 * @author GOF
 */
class DialUp extends Connections {
    
    
    private $Telephone_No;
    private $Region_code;
    private $Country;
    
    
    function __construct($Telephone_No, $Region_code, $Country) {
        $this->Telephone_No = $Telephone_No;
        $this->Region_code = $Region_code;
        $this->Country = $Country;
    }

    
  
    
    function getTelephone_No() {
        return $this->Telephone_No;
    }

    function getRegion_code() {
        return $this->Region_code;
    }

    function getCountry() {
        return $this->Country;
    }

    function setTelephone_No($Telephone_No) {
        $this->Telephone_No = $Telephone_No;
    }

    function setRegion_code($Region_code) {
        $this->Region_code = $Region_code;
    }

    function setCountry($Country) {
        $this->Country = $Country;
    }


}
