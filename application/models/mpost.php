<?php
class Mpost extends CI_Model {
    var $table;
    function __construct() {
        parent::__construct();
        $this->table ="post";
    }

    function save($data){
        $this->db->insert($this->table,$data);
    }

}
?>
