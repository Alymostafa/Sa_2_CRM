<?php

session_start();
var_dump($_SESSION['fname']);


//     public function getFname($id){
//     $data= $this->User_Queries->fname_by_name($id);
//         return $data;
//     }
//  public function getLname($id){
//     $data= $this->User_Queries->lname_by_name($id);
//         return $data;
//     }
  
//     public function  getUsername($id){
//     $data= $this->User_Queries->username_by_name($id);
//         return $data;
//     }
//     public  function getPass($id){
//         $data= $this->User_Queries->pass_by_name($id);
//         return $data;
//     }
//     public function  getEmail($id){
//         $data= $this->User_Queries->email_by_name($id);
//         return $data;
//     }
   
      
//     public function getRole($id) {

//         $data= $this->User_Queries->role_by_name($id);
//         return $data;

//         }
//         // =========================================== login
//         $logged_user=new User_parent();
// $logged_user->set_username($username);
// $logged_user->set_password($password);
// $login_return=$logged_user->login();
// if($login_return){
// 		$user_id=$logged_user->get_id();
// 		$role = $logged_user->getRole($user_id);
// 		$fname= $logged_user->getFname($user_id);
// 		$username=$logged_user->getUsername($user_id);
// 		$password=$logged_user->getPass($user_id);
// 		$lname=$logged_user->getLname($user_id);
// 		$email=$logged_user->getEmail($user_id);
// }
// if($login_return){
//      $logged_user=new User_parent($user_id);
//     $_SESSION['id']=$user_id;
//     $_SESSION['username']=$username;
//     $_SESSION['password']=$password;
//     $_SESSION['fname']=$fname;
//     $_SESSION['lname']=$lname;
//     $_SESSION['email']=$email;
//     $_SESSION['role']=$role;
//     if($_SESSION['role']==1){
//     header("Location: ../adminhome/adminhome.php");}
//     if($_SESSION['role']==2){
//     header("Location: ../customerhome/customerhome.php");}
//     if($_SESSION['role']==3){
//     header("Location:../employeehome/employeehome.php");}
// }
// // ========================================================user queries
// public function role_by_name($id){ 
//  $query = "select user_type_id from `users` where id= '$id'";
//  $res= $this->Db->get_row($query);
//  $role = $res["user_type_id"];
//  return $role;
// }
// public function fname_by_name($id){
//      $query = "select fname from `users` where id= '$id'";
//  $res= $this->Db->get_row($query);
//  $fname = $res["fname"];
//  return $fname;
// }
// public function lname_by_name($id){
//      $query = "select lname from `users` where id= '$id'";
//  $res= $this->Db->get_row($query);
//  $lname = $res["lname"];
//  return $lname;

// }
// public function username_by_name($id){
//      $query = "select username from `users` where id= '$id'";
//  $res= $this->Db->get_row($query);
//  $username = $res["username"];
//  return $username;
// }
// public function pass_by_name($id){
//      $query = "select password from `users` where id= '$id'";
//  $res= $this->Db->get_row($query);
//  $pass = $res["password"];
//  return $pass;
// }
// public function email_by_name($id){
//      $query = "select email from `users` where id= '$id'";
//  $res= $this->Db->get_row($query);
//  $email = $res["email"];
//  return $email;
// }

?>