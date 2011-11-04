<?php
class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata("login") != "true"){
            $this->session->set_flashdata("notif","anda bukan admin");
            redirect("login");
        }
    }


    function index() {
        $data["content"]="welcome";
        $this->load->view("template",$data);
    
    }
    function newpost(){
        $this->form_validation->set_rules("judul", "judul", "required");
        $this->form_validation->set_rules("isi", "isi", "required");
        if($this->form_validation->run()==true){
            
        }
        $data['content']="newpost";
        $this->load->view("template",$data);
    }

}
?>
