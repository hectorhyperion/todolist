<?php

 class Todolist extends CI_Model{

        public function insert_entry()
        {
          
        
        $data['additem'] = $this->input->post('add');

            $this->db->insert('todolist',$data);
        }

        public function get()
        {
           $query= $this->db->get('todolist');
           return $query->result();
        }

        function getbyid($id)
				{
					//use get where and pass is into an array
					return $this->db->get_where('todolist',array('id'=>$id))->row();
				}
                
        function update($id)
			{
				//post entires from form 
				$arr['additem'] = $this->input->post('add');
				
				$this->db->where(array('id'=>$id));
				// to save entries to db we use this->db-> insert and pass the parameters
				$this->db->update('todolist',$arr);

			}

        function delete($id)
			{
				$this->db->where(array('id'=>$id));
				$this->db->delete('todolist');
			}
}


?>