<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plan
 *
 * @author GOF
 */
 
class Plan {
    private $plan_id;
    private $plan_name;
    private $speed_limits;
    private $cost;
    private $duration;
    
    
    public function getPlan_id() {
        return $this->plan_id;
    }

    function setPlan_id($plan_id) {
        $this->plan_id = $plan_id;
    }

        
    function getPlan_name() {
        return $this->plan_name;
    }

    function getSpeed_limits() {
        return $this->speed_limits;
    }

    function getCost() {
        return $this->cost;
    }

    function getDuration() {
        return $this->duration;
    }

    function setPlan_name($plan_name) {
        $this->plan_name = $plan_name;
    }

    function setSpeed_limits($speed_limits) {
        $this->speed_limits = $speed_limits;
    }

    function setCost($cost) {
        $this->cost = $cost;
    }

    function setDuration($duration) {
        $this->duration = $duration;
    }


    
     
    
    
}
