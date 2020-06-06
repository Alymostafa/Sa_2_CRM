<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer_Queries
 *
 * @author GOF
 */
include_once '../Database/Database.php';
class Customer_Queries {
    private $Db;  
    public function __construct() {
         $this->Db = Database::getinstance();
         
    }
    
    public function send_complaint($user) {
        $c = $user->getcomplaint();
        $d= $user->get_id();
        $b = $user->getComplaint_header();
        //$query= $this->Db->insert("complaint",$data);
        //$result= $this->Db->database_query($query);
        $query="INSERT INTO `complaint` (`Complaint`, `customer_id`,`Complaint_header`) VALUES ('$c','$d','$b')";
        $result= Database::getInstance()->database_query($query);
       if (false === $result) {
           echo"no complaint";
        }
        return $result;

    }
    
    public function rate_solution($rate,$complaint_id) {
    $data['Rate'] = $rate;
    $result=$this->Db->update('solution', $data,"complaint_id = $complaint_id");


        if($result)
            echo 'rate succ';
        else {
            echo 'failed';
        }


    }
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

