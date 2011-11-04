<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata("login") != "true") {
            $this->session->set_flashdata("notif", "anda bukan admin");
            redirect("login");
        }
        $this->load->model("mpost");
    }

    function index() {
        $data["content"] = "welcome";
        $this->load->view("template", $data);
    }

    function newpost() {
        $this->form_validation->set_rules("judul", "judul", "required");
        $this->form_validation->set_rules("isi", "isi", "required");
        if ($this->form_validation->run() == true) {
            $judul = $this->input->post("judul", true);
            $isi = $this->input->post("isi", true);
            $date = date("Y-m-d");
            $mlebu = array("judul" => $judul, "isi" => $isi, "time" => $date);
            $this->mpost->save($mlebu);
            $this->session->set_flashdata("notif","Berhasil menambah artikel");
            redirect("dashboard/showpost");
        }
        $data['content'] = "newpost";
        $this->load->view("template", $data);
    }

    function showpost() {
        $data['content'] = "showpost";
        $data['posts'] = $this->mpost->getall();
        $this->load->view("template", $data);
    }

    function editpost($id="") {
        if ($id != "") {
            $this->form_validation->set_rules("judul", "judul", "required");
            $this->form_validation->set_rules("isi", "isi", "required");
            $this->form_validation->set_rules("id", "id", "required");
            if ($this->form_validation->run() == true) {
                $id = $this->input->post("id", true);
                $judul = $this->input->post("judul", true);
                $isi = $this->input->post("isi", true);
                $date = date("Y-m-d");
                $mlebu = array("judul" => $judul, "isi" => $isi, "time" => $date);
                $this->mpost->update($id,$mlebu);
                $this->session->set_flashdata("notif","Berhasil mengedit artikel");
                redirect("dashboard/showpost");
            }
            $data["post"] = $this->mpost->getone($id);
            $data['content'] = "editpost";
            $this->load->view("template", $data);
        }
    }

    function deletepost($id = "") {
        if ($id != "") {
            $this->mpost->delete($id);
            $this->session->set_flashdata("notif","Berhasil menghapus artikel");
            redirect("dashboard/showpost");
        }
    }

}
?>
