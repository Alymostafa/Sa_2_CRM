<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_parent
 *
 * @author GOF
 */
include_once '../Database/User_Queries.php';
include_once '../Database/Customer_Queries.php';
include_once '../classes/Roles.php';
class User_parent {
    private $fname;
    private $lname;
    private $username;
    private $pass;
    private $email;
    private $id;
    private $User_Queries;
    private $Roles;
    
    
    
    
    
    
     public  function __construct($id="") {
        $this->User_Queries=new User_Queries();
        if($id !=""){
            $user_data=$this->User_Queries->get_users_by_id($id);
            $this->fname=$user_data['fname'];
            $this->lname=$user_data['lname'];
            $this->email=$user_data['email'];
            $this->pass=$user_data['password'];
            $this->username=$user_data['username'];
           $this->Roles=new Roles($user_data[$user_type_id]);
        }
    }
    
 
    
    
    
    public function set_id($id) {
        $this->id = $id;
    }
    public function set_fname($fname){
         $this->fname=$fname;
    }
    public function set_lname($lname){
        $this->lname=$lname;
    }
    public function set_username($username){
        $this->username=$username;
    }
    public function set_password($password){
         $this->pass=$password;
    }
    public function set_email($email){
        $this->email=$email;
    }
    public function set_Roles($user_type_id){
       $this->Roles=new Roles($user_type_id);
    
}

 public function get_fname(){
        return $this->fname;
    }
 public function get_lname(){
        return $this->lname;
    }
  
    public function  get_username(){
        return $this->username;
    }
    public  function get_pass(){
        return $this->pass;
    }
    public function  get_email(){
        return $this->email;
    }
    public function get_id(){
        return $this->id;
    }
    public function get_Roles(){
        return $this->Roles;
    }
    public function getFname($id){
    $data= $this->User_Queries->fname_by_name($id);
        return $data;
    }
 public function getLname($id){
    $data= $this->User_Queries->lname_by_name($id);
        return $data;
    }
  
    public function  getUsername($id){
    $data= $this->User_Queries->username_by_name($id);
        return $data;
    }
    public  function getPass($id){
        $data= $this->User_Queries->pass_by_name($id);
        return $data;
    }
    public function  getEmail($id){
        $data= $this->User_Queries->email_by_name($id);
        return $data;
    }
   
      
    public function getRole($id) {

        $data= $this->User_Queries->role_by_name($id);
        return $data;

        }
    
    
        public function login(){
        $user_data=$this->User_Queries->get_users_by_username_password($this->username,$this->pass);
        if($user_data){
            $this->id=$user_data['id'];
            $this->fname=$user_data['fname'];
            $this->lname=$user_data['lname'];
            $this->email=$user_data['email'];
            $this->password=$user_data['password'];
            $this->username=$user_data['username'];
            $this->Roles=new Roles($user_data['user_type_id']);
           // session_start();
            $_SESSION['id']=$user_data['id'];
            $_SESSION['fname']=$user_data['fname'];
            $_SESSION['user_type_id']=$user_data['user_type_id'];
            return TRUE;
        }
        else{
            return FALSE;
        }
   
        }
        public function logout(){
            if(isset($_SESSION['id'])){
                unset($_SESSION['fname']);
                unset( $_SESSION['user_type_id']);
                header("location: index.php");
            }
        }
        
        
        
        public function get_role($id) {
         
        $data= $this->User_Queries->role_by_name($id);
        return $data;
        
        }
        
       

        
}   



/*$user= new User_parent();
$user->set_password('1234');
$user->set_username('aly');
$user->login();
var_dump($user);
*/