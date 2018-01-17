<?php 

	class News_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function view_data(){
			$query = $this->db->query("SELECT * FROM post ORDER BY post_id DESC ");
			return $query->result_array() ;
		}

		public function insert_data($data){
		    $this->db->insert('post' , $data);
        }

        public function edit_data($id){
            $query = $this->db->query("SELECT * FROM post WHERE post_id = $id");
            return $query->result_array();
        }
	}