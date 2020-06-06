<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BroadBand
 *
 * @author GOF
 */
class BroadBand extends Connections {
     
    private $BroadBand_Type;
    private $Adsl;
    
    
    function __construct($BroadBand_Type, $Adsl) {
        $this->BroadBand_Type = $BroadBand_Type;
        $this->Adsl = $Adsl;
    }

   
    
    function getBroadBand_Type() {
        return $this->BroadBand_Type;
    }

    function getAdsl() {
        return $this->Adsl;
    }

    function setBroadBand_Type($BroadBand_Type) {
        $this->BroadBand_Type = $BroadBand_Type;
    }

    function setAdsl($Adsl) {
        $this->Adsl = $Adsl;
    }


    
}
