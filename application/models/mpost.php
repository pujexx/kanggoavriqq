<?php

class Mpost extends CI_Model {

    var $table;

    function __construct() {
        parent::__construct();
        $this->table = "post";
    }

    function save($data) {
        $this->db->insert($this->table, $data);
    }

    function getall() {
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

}
?>
