<?php
class student_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getStudents() {
        $query = $this->db->get('students');
        return $query->result();
    }

    public function insertStudent($data) {
        return $this->db->insert('students', $data);
    }

    public function getById($id) {
        $query = $this->db->get_where('students', array('student_id'=>$id));
        return $query->row_array();
    }

    public function updateInfo($data, $id) {
        $this->db->where('students.student_id', $id);
        return $this->db->update('students', $data);
    }
    
    public function deleteStudent($id) {
        $this->db->where('students.student_id', $id);
        return $this->db->delete('students');
    }
}
?>