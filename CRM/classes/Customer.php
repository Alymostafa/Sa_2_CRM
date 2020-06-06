<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author GOF
 */
include_once '../classes/Admin.php';
include_once '../classes/User_parent.php';
include_once '../Database/Customer_Queries.php';
include_once '../classes/Connections.php';
//include_once '../classes/employee.php';
class Customer extends User_parent  {
    private $complaint;
    private $complaint_state;   
    private $customer_query;
    private $email;
    private $complaint_header;
    public function __construct() {
       $this->customer_query = new Customer_Queries(); 
   }
    
   function getComplaint_state() {
       return $this->complaint_state;
   }
   function getComplaint_header() {
       return $this->complaint_header;
   }

   function setComplaint_header($complaint_header) {
       $this->complaint_header = $complaint_header;
   }

   function setComplaint_state($complaint_state) {
       $this->complaint_state = $complaint_state;
   }

       
    function setcomplaint($complaint)
    {
        $this->complaint = $complaint;
    }
    
    function getcomplaint()
    {
        return $this->complaint;
    }
    
    
    
    public function sendcomplaint($user)
    {
        
        $result = $this->customer_query->send_complaint($user);
        
        if($result){
            return TRUE;
        }
 else {
     return FALSE;
     }
    }
    
    
    public function Rate_solution($rate,$complaint_id) {

        $result = $this->customer_query->rate_solution($rate,$complaint_id);

         if($result){
         return TRUE;
        }
 else {
     return FALSE;
     }
    }
        
        
        
        
        
        
        
        
    }
    
    
    
    
    
   


//test cases//



//$user=new Customer();
//$user->set_id("2015098");
//$user->set_username("aly");
//$user->setcomplaint("networking");
//$user->sendcomplaint($user);
//$user->Rate_solution("this is working", $user);

//$user=new Customer();
//$user->set_id("90");
//$user->setcomplaint("networkingasds");
//$user->sendcomplaint($user);
  
