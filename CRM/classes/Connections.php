<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connections
 *
 * @author GOF
 */
class Connections {
    private $username;
    private $pass;
    private $Internet_speed;
    private $price;
    private $connection_type;
    
    
    
    function getConnection_type() {
        return $this->connection_type;
    }

    function setConnection_type($connection_type) {
        $this->connection_type = $connection_type;
    }

       
    function __construct() {
    }

    
    function getUsername() {
        return $this->username;
    }

    function getPass() {
        return $this->pass;
    }

    function getInternet_speed() {
        return $this->Internet_speed;
    }

    function getPrice() {
        return $this->price;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setInternet_speed($Internet_speed) {
        $this->Internet_speed = $Internet_speed;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    
    
        
    
    
    
    
    
    
}
