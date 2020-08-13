<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class genreModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }

    function getGenre(){
        $this->db->order_by("name_g","asc");
        $query = $this->db->get('genre');
        return $query->result();
    }

    function addGenre($genre){
        $array = array('name_g' => $genre);
        $this->db->insert('genre', $array);
    }

    function deleteGenre($id){
        $this->db->where('id_g', $id);
        $this->db->delete('genre');
    }

    function updateGenre($id, $genre){
        $array = array('name_g' => $genre);
        $this->db->where('id_g', $id);
        $this->db->update('genre', $array);
    }

}