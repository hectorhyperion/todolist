 <?php
 
    class Login_model extends CI_Model{

       // Log user in
		public function login(){
			// Validate
			$arr['email'] = $this->input->post('email');
			$arr['password'] = $this->input->post('password');
			return $this->db->get_where('login' , $arr)->row();
			 
        }
    }
 
 
 
 ?>