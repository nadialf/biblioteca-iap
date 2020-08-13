<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class otherModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }

    //Libraries

    function getLibrary(){
        $this->db->order_by("name_l","asc");
        $query = $this->db->get('library');
        return $query->result();
    }

    function addLibrary($library){
        $array = array('name_l' => $library);
        $this->db->insert('library', $array);
    }

    function deleteLibrary($id){
        $this->db->where('id_l', $id);
        $this->db->delete('library');
    }

    function updateLibrary($id, $library){
        $array = array('name_l' => $library);
        $this->db->where('id_l', $id);
        $this->db->update('library', $array);
    }

    //Collections

    function getCollection(){
        $this->db->order_by("name_c","asc");
        $query = $this->db->get('collection');
        return $query->result();
    }

    function addCollection($collection){
        $array = array('name_c' => $collection);
        $this->db->insert('collection', $array);
    }

    function deleteCollection($id){
        $this->db->where('id_c', $id);
        $this->db->delete('collection');
    }

    function updateCollection($id, $collection){
        $array = array('name_c' => $collection);
        $this->db->where('id_c', $id);
        $this->db->update('collection', $array);
    }

    //Institutes

    function getInstitute(){
        $this->db->order_by("name_i","asc");
        $query = $this->db->get('institute');
        return $query->result();
    }

    function addInstitute($institute){
        $array = array('name_i' => $institute);
        $this->db->insert('institute', $array);
    }

    function deleteInstitute($id){
        $this->db->where('id_i', $id);
        $this->db->delete('institute');
    }

    function updateInstitute($id, $institute){
        $array = array('name_i' => $institute);
        $this->db->where('id_i', $id);
        $this->db->update('institute', $array);
    }
}