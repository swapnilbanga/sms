<?php
if(!defined('BASEPATH'))
    exit('No direct script access allowed');
class Hello extends CI_Controller {
    var $name;
    var $color;
    function __construct() {
        parent::__construct();
        $this->name = "Abir";
        $this->color = "Red";
    }
    function you() {
        $data['name'] = $this->name;
        $data['color'] = $this->color;
        $this->load->view('my_view', $data);
    }
}
?>