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
     echo anchor("login/logout","Logout bro");
    }

}
?>
