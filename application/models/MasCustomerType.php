<?php
class MasCustomerType extends CI_Model{

    public function GetAll(){
		$data = $this->db->query("SELECT * FROM mascustomertype");
		return $data;
	}

	function Insert($data){
        $this->db->insert('mascustomertype', $data);
    }

	public function GetCustomerTypeByName($name){
		$data = $this->db->query("SELECT * FROM mascustomertype WHERE name = '$name'");
		return $data;
	}

	public function GetCustomerTypeCountId(){
        $data = $this->db->query("SELECT COUNT(Id_CustomerType) as count_customertype FROM mascustomertype");
        return $data;
    }

}