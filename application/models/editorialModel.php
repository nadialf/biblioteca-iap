<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editorialModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }

    function getEditorial(){
        $this->db->order_by("name_e","asc");
        $query = $this->db->get('editorial');
        return $query->result();
    }

    function addEditorial($editorial){
        $array = array('name_e' => $editorial);
        $this->db->insert('editorial', $array);
    }

    function deleteEditorial($id){
        $this->db->where('id_e', $id);
        $this->db->delete('editorial');
    }

    function updateEditorial($id, $editorial){
        $array = array('name_e' => $editorial);
        $this->db->where('id_e', $id);
        $this->db->update('editorial', $array);
    }
}