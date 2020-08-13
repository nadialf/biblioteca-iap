<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class authorModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }

    function getAuthor(){
        $this->db->order_by("name_a","asc");
        $query = $this->db->get('author');
        return $query->result();
    }

    function addAuthor($author, $lastName){
        $array = array('name_a' => $author,
                        'last1_a' => $lastName);
        $this->db->insert('author', $array);
    }

    function deleteAuthor($id){
        $this->db->where('id_a', $id);
        $this->db->delete('author');
    }

    function updateAuthor($id, $author, $lastName){
        $array = array('name_a' => $author,
                        'last1_a' => $lastName);
        $this->db->where('id_a', $id);
        $this->db->update('author', $array);
    }
}