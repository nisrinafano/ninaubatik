<?php
class Testi_model extends CI_Model {

	public function insert_data($data) {
		$this->db->insert('testimoni', $data);
	}
	
	public function updateTesti($id, $data) {
        $this->db->where('ID', $id);
        return $this->db->update('testimoni', $data);
    }
    
    public function getTesti() {
        $res = $this->db->get('testimoni');
        return $res->result_array();
    }
    
    public function getTesti_id($id) {
        $this->db->where('ID', $id);
        $res = $this->db->get('testimoni');
        return $res->row_array();
    }
    
    public function getTesti_status() {
        $this->db->where('status', 'approved');
        $res = $this->db->get('testimoni');
        return $res->result_array();
    }
}
?>