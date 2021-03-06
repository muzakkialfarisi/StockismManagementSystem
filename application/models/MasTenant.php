<?php
class MasTenant extends CI_Model{

    public function GetAll(){
		$data = $this->db->query("SELECT * FROM mastenant");
		return $data->result_array();
	}

	public function Insert($data){
        $this->db->insert('mastenant', $data);
    }

	public function Update($data){
        $this->db->where('email_tenant', $data['email_tenant']);
        $this->db->update('mastenant', $data);
	}
	
	public function Delete($data){
        $this->db->where('email_tenant', $data['email_tenant']);
        $this->db->delete('mastenant', $data);
	}

	public function GetTenantById($email_tenant){
        $data = $this->db->query("SELECT * FROM mastenant WHERE email_tenant = '$email_tenant' ");
		return $data;
	}

	public function GetTenantByEmail($email){
		$data = $this->db->query("SELECT * FROM mastenant WHERE email = '$email'");
		return $data;
	}

}