<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of employee
 *
 * @author GOF
 */
include_once '../classes/User_parent.php';
include_once '../Database/Employee_Queries.php';
class employee extends User_parent {
    
    private $employee_query;
    private $solution;
    private $complaint_state
    
    function getSolution() {
        return $this->solution;
    }

    function setSolution($solution) {
        $this->solution = $solution;
    }

        public function __construct() {
       $this->employee_query = new Employee_Queries(); 
   }
    
     public function view_complaint() {
        $data = array();
        $data = $this->employee_query->view_complaint();
        return $data;        
    }
    
    public function Solvecomplaint($id,$state)
    {
        $data = array();    
        $data = $this->employee_query->solve_complaint($id,$state);
        return $data;
        
    }
    
    
    
   public function Solution($complaint_id,$solution)
    {
        $data = array();
        $data = $this->employee_query->solu_complaint($complaint_id,$solution);
        return $data;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
    
    
    
    
    
    
    
    

    
    
}

//test cases//

// $user=new employee();
// $q = array();
// $q = $user->Solvecomplaint("2","1");
// $user->setSolution("go and fk yourself");
// $user->Solution("10",$user);


//var_dump($q);




