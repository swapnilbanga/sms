<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');
class students extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('student_model');
    }

    public function index() {
        $data['student'] = $this->student_model->getStudents();
        $this->load->view('view_students', $data);
    }

    public function addStudent() {
        $this->load->view('new_student');
    }

    public function newStudent() {
        $new_data['full_name'] = $this->input->post('full_name');
        $new_data['address'] = $this->input->post('address');
        $new_data['gender'] = $this->input->post('gender');
        $new_data['passing_year'] = $this->input->post('passing_year');
        $new_data['hobbies'] = implode(',', $this->input->post('hobby'));
        $response = $this->student_model->insertStudent($new_data);
        if ($response) {
            header('location:'.base_url()."index.php/students/".$this->index());
        }
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $data['student'] = $this->student_model->getById($id);
        $this->load->view('update_student', $data);
    }

    public function update() {
        $update_data['full_name'] = $_POST['full_name'];
        $update_data['address'] = $_POST['address'];
        $update_data['gender'] = $_POST['gender'];
        $update_data['passing_year'] = $_POST['passing_year'];
        $update_data['hobbies'] = implode(',', $_POST['hobby']);
        $response = $this->student_model->updateInfo($update_data, $_POST['id']);
        if($response) {
            header('location:'.base_url()."index.php/students/".$this->index());
        }
    }

    public function delete() {
        $id = $this->uri->segment(3);
        $this->student_model->deleteStudent($id);
        header('location:'.base_url()."index.php/students/");
    }
}
?>