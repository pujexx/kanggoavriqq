<?php
class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata("login") != "true"){
            $this->session->set_flashdata("notif","anda bukan admin");
            redirect("login");
        }
        $this->load->model("mpost");
    }


    function index() {
        $data["content"]="welcome";
        $this->load->view("template",$data);
    
    }
    function newpost(){
        $this->form_validation->set_rules("judul", "judul", "required");
        $this->form_validation->set_rules("isi", "isi", "required");
        if($this->form_validation->run()==true){
            $judul = $this->input->post("judul", true);
            $isi = $this->input->post("isi", true);
            $date = date("Y-m-d");
            $mlebu = array("judul"=>$judul,"isi"=>$isi,"time"=>$date);
            $this->mpost->save($mlebu);
            redirect("dashboard");
        }
        $data['content']="newpost";
        $this->load->view("template",$data);
    }

}
?>
