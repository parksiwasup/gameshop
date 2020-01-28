<?php
class register_model extends CI_Model
{

    public function addmember()
    {
        
        $email_user    = $this->input->post('email_user');
        $iduser_user = $this->input->post('iduser_user');
        $pass_user = $this->input->post('pass_user');
        $data = array(

            'email_user' => $email_user,
            'iduser_user' => $iduser_user,
            'pass_user' => $pass_user,
         );

        $this->db->insert('tb_user', $data);
        if ($this->db->affected_rows() != 1) {
            echo "Error Record Rows";
        } else {
            $this->template->load('user/login_user','custom/footer','custom/navbar','custom/assist','custom/aos_time','custom/order',$data);
        }
    }

    // public function editmember()
    // {
    //     $data = array(
    // 		'username_user' => $this->input->post('username_user'),
    //         'password_user' => $this->input->post('password_user'),
    //         'name_user' => $this->input->post('name_user'),
    //         'email_user' => $this->input->post('email_user'),
    //         'tell_user' => $this->input->post('tell_user'),
    //         'address_user' => $this->input->post('address_user')

    //     );
    //     $this->db->where('id_user',$this->input->post('id_user'));
    //     $query=$this->db->update('tb_user',$data);
    //     redirect('game/game_view','refresh'); 
    //     // if($query){
    //     //     echo ' editOK';
    //     // }else{
    //     //     echo 'NO';
    //     // }
    // 	// echo '<pre>';
    // 	// print_r($_POST);
    // 	// echo '</pre>';
    // }



    // public function showdata()
    // {
    //         $this->db->select('*');
    //         $this->db->from('tb_user');
    //         $this->db->where('user_level','1');
    //         $query = $this->db->get();

    //         return $query->result();
    // }

    // public function read($id_user){
    //         $this->db->select('*');
    //         $this->db->from('tb_user');
    //         $this->db->where('id_user',$id_user);
    //         $query = $this->db->get();
    //         if($query->num_rows() > 0){
    //         $data = $query->row();
    //         return $data;
    // }
    //         return FALSE;

    // }

    // public function del($id_user)
    // {
    //        $this->db->delete('tb_user',array('id_user'=>$id_user));
    //        redirect('game/game_view','refresh'); 
    //     //    ส่งค่าเสร็จจะส่งไปหน้านั้นๆ
    // }

    // // public function showdata()
    // // {
    // //         $this->db->select('*');
    // //         $this->db->from('tb_user');
    // //         $this->db->where('user_level','1');
    // //         $query = $this->db->get();

    // //         return $query->result();
    // // }

    // // public function read($id_user){
    // //         $this->db->select('*');
    // //         $this->db->from('tb_user');
    // //         $this->db->where('id_user',$id_user);
    // //         $query = $this->db->get();
    // //         if($query->num_rows() > 0){
    // //         $data = $query->row();
    // //         return $data;
    // // }
    // //         return FALSE;

    // // }
    // // โชข้อมูลแบบเลือกคอลัมเลือกไทน์


}
