<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
       
        $this->load->model("mlogin");

    }

    function index() {
        $this->load->view("login");
    }

    function auth() {
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");
        if ($this->form_validation->run() == true) {
            $username = $this->input->post("username", true);
            $password = $this->input->post("password", true);
            if ($this->mlogin->ceklogin($username, $password) == true) {
                $session = $this->mlogin->proseslogin($username, $password);
                $this->session->set_userdata("id", $session['id']);
                $this->session->set_userdata("login", "true");
                redirect("dashboard");
            } else {
                $this->session->set_flashdata("notif", "Tidak ada dalam system");
                redirect("login");
            }
        }
    }

    function logout() {
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("login");
        $this->session->set_flashdata("notif", "Sudah keluar dari sistem");
        redirect("login");
    }

}
?>
