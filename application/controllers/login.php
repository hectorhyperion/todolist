<?php

    class login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        //get session
        if($this->session->userdata('login'))
        redirect('index');
       
    }
        
        public function index()
        {
            //passing data to view
            $this->load->view('login');
        }

         public function verify()
        {
            //login
          $this->load->model('login_model');
            //checking validation rules
          $this->form_validation->set_rules('email','Email', 'required');
          $this->form_validation->set_rules('password','Password','required');

          if ($this->form_validation->run() == FALSE)
           {
            
             $this->load->view('login');
          }
          else{

               $check= $this->login_model->login();
               if($check )
               {
                   //setting session data
                   $this->session->set_userdata('login','1');
                    redirect('index');
               }
               else {
                   //flashdata for incorrect passowrd and user name 
 				 $this->session->set_flashdata('login_failed', 'incorect username/password');
                   redirect('login');
               }
				 
               
			}                  
        }

       
          
        
        
        
    }


?>