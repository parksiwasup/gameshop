<?php
class login_model extends CI_Model
{

    function validate($iduser_user,$pass_user)
    {
        $this->db->where('iduser_user',$iduser_user);
        $this->db->where('pass_user',$pass_user);
        $result = $this->db->get('tb_user');
        return $result;
    }
}
