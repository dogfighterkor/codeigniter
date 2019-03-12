<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class topic extends CI_Controller {

        public function index()
        {
	      $this->load->model('Post');
	      $data = $this->Post->gets();	
	      $this->load->view('head');
              $this->load->view('list', array('data'=>$data));
	      $this->load->view('footer');
        }
	
	public function get($id) {
	      $this->load->model('Post');
	      $data = $this->Post->get($id);
	      $this->load->view('head');
	      $this->load->view('main', array('data'=>$data));
	      $this->load->view('footer');
	}
	public function save() {
		$title = $this->input->post('title');
		$desc = $this->input->post('desc');
		$id = $this->input->post('id');
		$this->load->model('Post');
		$data = array("title"=>$title, "desc"=>$desc, "id"=>$id);
		$this->Post->save($data);
		$this->load->helper('url');
		redirect("http://52.79.226.21/index.php/topic");
	}
	public function write() {
		$this->load->view('head');
		$this->load->view('write');
		$this->load->view('footer');
	}
	public function update($id) {
	      $this->load->model('Post');
	      $data = $this->Post->get($id);
	      $this->load->view('head');
	      $this->load->view('write', array('data'=>$data));
	      $this->load->view('footer');
	}
	public function delete($id) {
		$this->load->model('Post');
		$this->Post->delete($id);
		$this->load->helper('url');
                redirect("http://52.79.226.21/index.php/topic");
	}
}
