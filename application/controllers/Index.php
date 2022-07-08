<?php

    class Index extends CI_Controller
    {

        public function __construct()
		{
			parent::__construct();
            //check session
            if(!$this->session->userdata('login'))
            redirect('login');

		
			$this->load->model('todolist');
		
		}
         public function index()
         {
             //fetching data
             $this->load->model('todolist');
			 
              $query['do']= $this->todolist->get();
                 
             $this->load->view('index',$query);
         }

         public function form()
         {
         
            
        //validations rules
         $this->form_validation->set_rules('add', 'Add', 'required');
         //check validations
     
         if($this->form_validation->run() == FALSE)
        {
           
         redirect('index');
       }
         else{
           
            $this->todolist->insert_entry();
               redirect('index');
         }
          
         }
         function edit($id)
		{
			//use the id to get the entry from the database
			$arr['do'] = $this->todolist->getbyid($id);
			$this->load->view('edit',$arr);
		}

		function update($id)
		{
			// load form data from  function model 
			$this->todolist->update($id);

		 
			redirect('index');
	}
	    function delete($id)
		{
			$this->todolist->delete($id);
			//$this->session->set_flashdata('success','News Deleted sucessfully');
			redirect('index');
		}
       
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('login');
        }
          
    }

?>
