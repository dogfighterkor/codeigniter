<?php
class Post extends CI_Model {
	function __conttruct() {
		parent::__construct();
	}
	
	public function gets() {
		return $this->db->get('posts')->result();
	}
	public function get($id) {
		return $this->db->get_where('posts', array('id'=>$id))->row();
	}
	public function save($data) {
		if($data["id"] == 0) {
			$this->db->insert('posts', array('title'=>$data['title'], 'description'=>$data['desc']));
		}
		else
		{
			$content = array('title'=>$data['title'], 'description'=>$data['desc']);
			$where = array('id'=>$data['id']);
			$this->db->update('posts', $content, $where);
		}
	}
	public function delete($id)
	{
		$where = array('id'=>$id);
		$this->db->delete('posts', $where);
	}
}
