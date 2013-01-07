<?php

class LoginModel extends CI_Model{
    public function login($name, $pass){
        
        $this->db->select('name, pass');
        $this->db->from('members');
        $this->db->where('name', $name);
        $this->db->where('pass', $pass);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
    }
}
?>
