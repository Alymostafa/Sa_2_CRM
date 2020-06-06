<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_Queries
 *
 * @author GOF
 */
include_once '../Database/Database.php';
include_once '../classes/Roles.php';
include_once '../classes/Isp.php';
include_once '../classes/Plan.php';
include_once '../classes/Country.php';
include_once '../classes/Connections.php';
class Admin_Queries {
        private $Db;
       
        public function __construct() {
         $this->Db = Database::getInstance();
        }
        
        
     public function addUser($user,$connections){
     $data= array();
     $data['id'] = $user->get_id();
     $data['username']=$user->get_username();
     $data['password']=$user->get_pass();
     $data['fname']=$user->get_fname();
     $data['lname']=$user->get_lname();
     $data['email']=$user->get_email();
     $data['user_type_id']=$user->get_Roles()->id;
     $data['connection_type_id'] = $connections->getConnection_type();
     $result = $this->Db->insert('users', $data);
     //$result =
    if ($result) {
        echo '1';
        }

        echo '0';
}


        public function addemployee($user){
     $data= array();
     $data['id'] = $user->get_id();
     $data['username']=$user->get_username();
     $data['password']=$user->get_pass();
     $data['fname']=$user->get_fname();
     $data['lname']=$user->get_lname();
     $data['email']=$user->get_email();
     $data['user_type_id']=$user->get_Roles()->id;
     $result = $this->Db->insert('users', $data);
     //$result =
    if ($result) {
        echo '1';
        }

        echo '0';
}



public function add_country($country,$user_id) {

    $query = "select isp_id from isp where isp_of_users = $user_id";
    $res = $this->Db->get_row($query);
    $isp_id= $res["isp_id"];
    $data = array();
    //$data['c_id'] = $country->getC_id();
    $data['c_Name'] = $country->getC_Name();
    $data['c_of_user'] = $user_id;
    $data['c_isp'] = $isp_id;
     $result = $this->Db->insert('country',$data);
     if($result)
    {
        echo 'country added';
    }
 else {
        echo 'country nottttt';
    }



}





public function add_isp($isp,$user_id)
{
    $query = "select plan_id from plan where c_id = $user_id";
    $res = $this->Db->get_row($query);
    $plan_id= $res["plan_id"];

    $data = array();
    $data['isp_name'] = $isp->getName();
    $data['isp_plans'] = $plan_id;
    $data['isp_of_users'] = $user_id;
    $result = $this->Db->insert('isp',$data);
    if($result)
    {
        echo 'good job';
    }
 else {
        echo 'fkyou';
    }




}

public function edit($user,$id) {
    $data = array();
    $data['password'] = $user->get_pass();
    //$data['password'] = $user->get_pass();
    //$data['username'] = $user->get_username();
    $result=$this->Db->update('users', $data,"id = $id");
 if($result){
       return TRUE;
      }
     else{
       echo'stupied';
    }
 
}

public function add_plan($userid,$package) {
    $data = array();
    $data['plan_id'] = $package->getPlan_id();
    $data['plan_name'] = $package->getPlan_name();
    $data['speed_limits'] = $package->getSpeed_limits();
    $data['cost'] = $package->getCost();
    $data['duration'] = $package-> getDuration();
    $data['c_id'] = $userid;
    $result= $this->Db->insert('plan', $data);

     if($result){
         echo '1';
      }
     else{
          echo '0';
    }

}

public function deleteUser($query,$query_1,$query_2,$query_3)
{
       $this->Db->delete($query);
       $this->Db->delete($query_1);
       $this->Db->delete($query_2);
       $this->Db->delete($query_3);
       
        
          //   if($result){
       //return TRUE;
      //}
     //else{
       //return False;
   // }
}       


public function ViewUsers(){
      $query="SELECT * from `users` where user_type_id= 2";
      $result= $this->Db->database_query($query);
      $q= $this->Db->database_all_assoc($result);
       if($q)
           {
           return $q;      
    } else {
        echo 'no';
    }
}


public function gen_report($id)
{
    // $id = $customer->get_id();
    $query = "select complaint_id from `complaint` where customer_id = $id";
    $res = $this->Db->get_row($query);
    $comp_id= $res["complaint_id"];
    $query_1 = "select complaint from `complaint` where complaint_id = $comp_id";
    $query_2 = "select complaint_state from `complaint` where complaint_id = $comp_id";
    $query_3 = "select Rate from `solution` where complaint_id = $comp_id";
    $res1 = $this->Db->get_row($query_1);
    $complaint = $res1["complaint"];
    $res2 = $this->Db->get_row($query_2);
    $complaint_state = $res2["complaint_state"];
    $res3 = $this->Db->get_row($query_3);
    $rate = $res3["Rate"];
    
    $data = array($comp_id,$complaint,$complaint_state,$rate);
    
    return $data;
    
    
    
    
    
    
    
}











public function ViewEmployee(){
      $query="SELECT * from `users` where user_type_id= 3";
      $result= $this->Db->database_query($query);
      $q= $this->Db->database_all_assoc($result);
       if($q){
           return $q;
    } else {
        echo 'no';
        }
}






public function View_report(){
 $query="SELECT users.username, feedback.Feedback FROM users INNER JOIN staff ON users.id = report.users_id ";
 $result= $this->Db->database_query($query);
 $re= $this->Db->database_all_assoc($result);
 if ($re) {
            return $re;
        } else {
            return false;
        }
    }

public function view_complaint(){
    $query = "SELECT Complaint from `complaint`";
    $result= $this->Db->database_query($query);
    $q= $this->Db->database_all_assoc($result);
     if($q){
           return $q;
    } else {
        echo 'noresult';;
    }

    
    }
    


    
    
    
    
    
    public function Search_users($username){

       $query="SELECT username,email,fname,lname from users where username='$username' limit 1";
       $result= $this->Db->database_query($query);
        $q= $this->Db->database_all_assoc($result);
        if (false === $q) {
          echo mysqli_error();
        }

        return $q;
    }
        
        
        
    

    public function add_allocator($user,$isp,$plan,$country,$connections) 
 { 
     $this->addUser($user,$connections);
     $this->add_plan($user,$plan);
     $this->add_isp($isp,$plan,$user);
     $this->add_country($country,$user,$isp);

}



        
        
        
        
        
        
        
        

}

