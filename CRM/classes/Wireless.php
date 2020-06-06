<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Wireless
 *
 * @author GOF
 */
class Wireless extends Connections {
    
    private $_4G_Connection;
    private $Public_Wifi;
    
    function __construct($_4G_Connection, $Public_Wifi) {
        $this->_4G_Connection = $_4G_Connection;
        $this->Public_Wifi = $Public_Wifi;
    }

    
    function get_4G_Connection() {
        return $this->_4G_Connection;
    }

    function getPublic_Wifi() {
        return $this->Public_Wifi;
    }

    function set_4G_Connection($_4G_Connection) {
        $this->_4G_Connection = $_4G_Connection;
    }

    function setPublic_Wifi($Public_Wifi) {
        $this->Public_Wifi = $Public_Wifi;
    }


   
    
}
