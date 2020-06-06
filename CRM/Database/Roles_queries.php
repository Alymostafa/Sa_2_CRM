<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Roles_queries
 *
 * @author GOF
 */
include_once '../Database/Database.php';
class Roles_queries {
     private $Db;
   public function __construct() {
         $this->Db = Database::getInstance();
        }
    public function  get_user_by_id($id){
        $Query="SELECT * FROM `Roles`  where type_id=$id";
        $type_data= $this->Db->get_row($Query);
        return $type_data;
    }
}
//        $type_data= $this->Db->get_row($Query);
