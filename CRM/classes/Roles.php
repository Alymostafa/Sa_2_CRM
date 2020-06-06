<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Roles
 *
 * @author GOF
 */
include_once '../Database/Roles_queries.php';
class Roles {
    
    public $id;
    public $name;
    private $Roles_Queries;
    public function __construct($id) {
        $this->Roles_Queries=new Roles_queries(); 
        if($id !=""){
            $Roles_data=$this->Roles_Queries->get_user_by_id($id);
            $this->name=$Roles_data['type'];
            $this->id=$id;
        }
    }
}
