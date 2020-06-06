<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee_Queries
 *
 * @author GOF
 */
include_once '../Database/Database.php';
include_once '../classes/email_config.php';
include_once '../mail/mail.php';
class Employee_Queries {
    
    private $Db;  
    
    public function __construct() {
         $this->Db = Database::getInstance();
    }
    
    public function view_complaint(){
    $query = "SELECT Complaint from `complaint`";
    $result= $this->Db->database_query($query);
    $q= $this->Db->database_all_assoc($result);
     if($q){
           return $q;
    } else {
        echo 'no result';
        }

    
    }
    
    
    
   public function solve_complaint($id,$state) {
       //$query = "INSERT INTO complaint(complaint_state) VALUES ('1') where id = $id"; 
        //$result = $this->Db->database_query($query);
        $data = array();
        $data['complaint_state'] = $state;
        $result=$this->Db->update('complaint', $data,"complaint_id = $id");
        //$q= $this->Db->database_all_assoc($result);
        $query_1 = "select customer_id from complaint where complaint_id = $id";
        $result_1= $this->Db->get_row($query_1);
        $user_id= $result_1["customer_id"];
        $query = "select email from users where id = $user_id";
        $res= $this->Db->get_row($query);
        //$w= $this->Db->database_all_assoc($res);
        $mail = $res["email"];
        //echo $mail;
        //$m = json_encode($mail);
        //$s=str_replace('email', '', $m);
        //echo $s;

        //echo strstr($m, ':', true);
        //var_dump($mail);
        if($state === "1")
        {
        SendEmail($mail, "Your Problem", "Dear Customer The Problem Solved, Please Check It");
        }
 else {
          echo 'no message sent';
 }

    }
    
    
    
    
public function solu_complaint($complaint_id,$solution) {

        $query_1 = "select customer_id from complaint where complaint_id = $complaint_id";
        $result_1 = $this->Db->get_row($query_1);
        $customer_id = $result_1["customer_id"];
        $data = array();
        $data['solution'] = $solution;
        $data['complaint_id'] = $complaint_id; 
        $data['customer_id'] = $customer_id;

        $result = $this->Db->insert('solution',$data);
    //$result= $this->Db->insert('plan', $data);
        if($result)
            echo 'good';
        else {
            echo 'no';
        
        
        
        
        
        
    }
        
    
    
    }
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    
   
    
    
    
    

