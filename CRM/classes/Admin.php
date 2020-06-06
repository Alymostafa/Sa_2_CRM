<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Admin
 *
 * @author GOF
 */
include_once '../Database/Admin_Queries.php';
include_once '../Database/Roles_queries.php';
include_once '../classes/User_parent.php';
include_once '../classes/Plan.php';
include_once '../classes/Isp.php';
include_once '../classes/Country.php';
include_once '../classes/Connections.php';
include_once '../classes/email_config.php';
include_once '../classes/report.php';
include_once '../classes/Customer.php';
class Admin extends User_parent{
    private $Admin_Queries;
    
    //add customer country,isp--isp in country
       function __construct() {
       $this->Admin_Queries = new Admin_Queries();
    }
    public function AddIsp($isp,$user_id)
    {
        $result = $this->Admin_Queries->add_isp($isp,$user_id);
        
        if($result)
        {
            return TRUE;
        }
     else {
            return FALSE;
 }
        
        
    }
    
    public function Add_Allocator($user,$isp,$plan,$country,$connections) {
        
        $result = $this->Admin_Queries->Allocator($user,$isp,$plan,$country,$connections);
            if($result)
        {
            return TRUE;
        }
     else {
            return FALSE;
 }
        
        
        
    }
    public function get_report($customer_id){
  
     $pdf = new FPDF();
     $pdf->AddPage();
     $pdf->SetFont('Times', 'B', 20); 
     $data = array();
     $data = $this->Admin_Queries->gen_report($customer_id);
     //echo $data[0];
     

     
     
     
// Framed rectangular area 
$pdf->Cell(176, 5, "-Employee Report-", 0, 0, 'C'); 
  
// Set it new line 
$pdf->Ln(); 
$pdf->Ln();


// Set font format and font-size 
$pdf->SetFont('Times', 'B', 12); 
  
// Framed rectangular area 

$pdf->Cell(50, 10, "Complaint ID:", 'C'); 
$pdf->Cell(-13, 10, $data[0],  'C'); 
$pdf->Cell(1, 20, "Complaint:", 0, 0, 'C'); 
$pdf->Cell(50, 20, $data[1], 0, 0, 'C'); 
$pdf->Cell(150, 40, "Complaint State:", 0, 0, 'C'); 
$pdf->Cell(-13, 40, $data[2], 0, 0, 'C');
$pdf->Cell(200, 50, "Rate:", 0, 0, 'C'); 
$pdf->Cell(-13, 50, $data[3], 0, 0, 'C');  
// Close document and sent to the browser 
$pdf->Output("aly.pdf", "I");

    } 
    
    
    

    
    
    
       
    public function AddCountry($country,$user_id) {
        
        $result = $this->Admin_Queries->add_country($country,$user_id);
        
              if($result)
        {
            return TRUE;
        }
 else {
            return FALSE;
 }      
    }
  
    public function AddUser($user,$connections){
        $result= $this->Admin_Queries->adduser($user,$connections);
        //$email = $user->get_email();
       // SendEmail($email, "fkyou", "suckit");
        if ($result) {
            return TRUE;
        } else {
            return False;
        }
        }
        
    public function AddPlan($userid,$package)
    {
        $result = $this->Admin_Queries->add_plan($userid,$package);
        
         if ($result) {
            return TRUE;
        } else {
            return False;
        }
    }


        public function DeleteUser($query,$query_1,$query_2,$query_3) {
            $result = $this->Admin_Queries->deleteUser($query,$query_1,$query_2,$query_3);
            if ($result) {
            return TRUE;
        } else {
            return False;
        }
            
        }
        public function add_employee($user){
        $result= $this->Admin_Queries->addemployee($user);
        //$email = $user->get_email();
       // SendEmail($email, "fkyou", "suckit");
        if ($result) {
            return TRUE;
        } else {
            return False;
        }
        }
   
       public function viewusers(){
        $data= array();
        $data=$this->Admin_Queries->ViewUsers();
        return $data;
    }
   
   
    
    public function view_report() {
       $data=array();
       $data=$this->Admin_Queries->View_report();
       return $data;
    }
    
    public function view_complaint() {
        $data = array();
        $data = $this->Admin_Queries->view_complaint();
        return $data;        
    }
    
    public function edit($user,$id) {
        
        $data = array();
        $data = $this->Admin_Queries->edit($user,$id);
        return $data;
  
    }
    
      public function search_users($username){
            $data = array();    
            $data= $this->Admin_Queries->Search_users($username);
            return $data;

        }
        
        
     public function view_users(){
         $data = array();
         $data = $this->Admin_Queries->ViewUsers();
         return $data;
         
     }
     
     
     public function view_employees(){
         $data = array();
         $data = $this->Admin_Queries->ViewEmployee();
         return $data;
         
         
     }
    
   
        
}  



//$user = new Customer();

    
 //test cases//
// $user = new Admin();
// $customer = new Customer();
// $connections = new Connections();
// $user->set_id("201512");
// $user->set_username("jackq");
// $user->set_password("2000");
// $user->set_fname("sww");
// $user->set_lname("qqq");
// $user->set_email("alimostfa2000@hotmail.com ");
// $user->set_Roles("2");
// $connections->setConnection_type("1");
// $user->AddUser($customer, $connections);
//$b = $user->get_Roles();

 //$user->set_password("60");
 //$r=$user->edit($user,"20170334");
/*$user = new Admin();
$country = new Country();
$connections = new Connections();
$package = new Plan();
$isp = new Isp();
//$q = array();
//$q = $user->view_complaint();
//var_dump($q);
$user->set_id("2015098");
$user->set_username("jacko");
$user->set_password("2000");
$user->set_fname("sww");
$user->set_lname("qqq");
$user->set_email("qqqq@hotmail.com");
$user->set_Roles('2');
$connections->setConnection_type('2');
$package->setPlan_id("123");
$package->setPlan_name("at&t");
$package->setSpeed_limits("60mb/s");
$package->setCost("20$");
$package->setDuration("2/2/2010");
$isp->setName("we");
$isp->setID("9");
//$user->AddIsp($isp, $package, $user);
$country->setC_id("1");
$country->setC_Name("egypt");
$user->Add_Allocator($user, $isp, $package, $country, $connections);
//$user->AddCountry($country, $user, $isp);
//$b=$user->AddPlan($user,$package);
 //$r=$user->AddUser($user,$connections);
//var_dump($b);*/

    
 //$r = $user->DeleteUser("DELETE FROM `country` WHERE c_id = 1","DELETE FROM `isp` WHERE isp_id = 9","DELETE FROM `plan` WHERE plan_id = 123","DELETE FROM `users` WHERE id = 2015098");
 //echo '$r';
 //var_dump($r);
// $user = new Admin();
// //  $customer = new Customer(); 
// //  $customer->set_id("2015098");
//  $user->get_report(2);
 

 
