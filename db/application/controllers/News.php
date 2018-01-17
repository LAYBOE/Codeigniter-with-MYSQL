<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct() ; 
		$this->load->helper('url');
		$this->load->model('news_model' , 'news');
	}

//	Show all
	public function index(){
		$this->data['view_data'] = $this->news->view_data(); 
		$this->load->view('show_news' , $this->data  , FALSE);
	}

//	go to Insert View
	public function add(){
        $this->load->view('add/add_news');
    }
//   <insert> and Submit to database
    public function submit(){

        $data = array(
            'post_title'    => $this->input->post('title'),
            'post_date'    => date("m/d/y h:i:s"),
            'post_author'    => $this->input->post('author'),
            'post_image'    => $this->input->post('imageurl'),
            'post_content'    => $this->input->post('content'),
            'source'    => $this->input->post('source'),
            'type'    => 'N/A',
        );

        $this->news->insert_data($data);

        $this->data['view_data'] = $this->news->view_data();
		redirect('news/index');
    }

//    Open edit view with data by id
    public function edit_data($id){
        $this->data['edit_data'] = $this->news->edit_data($id);
        $this->load->view('add/edit' , $this->data , FALSE);
    }

//    Update function
//  edit the data
    public function update_data($id){
        $data =array (
            'post_title'   =>   $this->input->post('title'),
            'post_date'    =>   date("m/d/y h:i:s"),
            'post_author'  =>   $this->input->post('author'),
            'post_image'   =>   $this->input->post('imageurl'),
            'post_content' =>   $this->input->post('content'),
            'source'       =>   $this->input->post('source'),
            'type'         =>   'N/A',
        );
        $this->db->where('post_id' , $id);
        $this->db->update('post' , $data);
        redirect('news/index');
    }

    //DELETE Data function

    public function delete_data($id){
        $this->db->where('post_id' , $id);
        $this->db->delete('post');
        $this->session->set_flashdata('message', 'Your data deleted Successfully..');
        redirect('news/index');
    }
}