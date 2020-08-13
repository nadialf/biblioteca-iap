<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bookModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();

    }

    function getBooks(){
        $this->db->select('book.id_b, book.title, book.release_year, book.language, book.place, book.pages, book.description, book.classification, book.edition, book.copy, book.notes_b, book.cover, author.name_a, author.last1_a, editorial.name_e, genre.name_g, library.name_l, collection.name_c, institute.name_i');
        $this->db->from('book');
        $this->db->join('author',    'author.id_a = book.id_a');
        $this->db->join('editorial', 'editorial.id_e = book.id_e');
        $this->db->join('genre',     'genre.id_g = book.id_g');
        $this->db->join('library',   'library.id_l = book.id_l');
        $this->db->join('collection','collection.id_c = book.id_c');
        $this->db->join('institute', 'institute.id_i = book.id_i');
        $this->db->order_by("id_b","asc");
        $query = $this->db->get();
        return $query->result();
    }

    function getAllBooks(){
    	$this->db->select('book.id_b, book.classification, book.title, book.copy, book.copy_loan, author.id_a, author.name_a, author.last1_a, editorial.id_e, editorial.name_e');
        $this->db->from('book');
        $this->db->join('author', 'author.id_a = book.id_a');
        $this->db->join('editorial', 'editorial.id_e = book.id_e');

        $this->db->order_by("id_b","asc");
        $query = $this->db->get();
        return $query->result();
    }

    function getLibrary(){
        $this->db->order_by("name_l","asc");
        $query = $this->db->get('library');
        return $query->result();
    }

    function getCollection(){
        $this->db->order_by("name_c","asc");
        $query = $this->db->get('collection');
        return $query->result();
    }

    function getInstitute(){
        $this->db->order_by("name_i","asc");
        $query = $this->db->get('institute');
        return $query->result();
    }

    function addBook($folio, $title, $author, $number, $editorial, $year, $place, $genre, $language, $pages,
                        $description, $notes, $copy, $classification, $library, $collection, $institute, $path){
        
        $this->db->select('id_a, CONCAT(name_a," ",last1_a) AS name', FALSE);
        $query = $this->db->get('author');
        foreach ($query->result() as $row) {
            if ($row->name == $author) {
                $id_a = $row->id_a;
            }
        }
        
        $this->db->where('name_e', $editorial);
        $query2 = $this->db->get('editorial');
        if ($query2->num_rows() == 1) {
            foreach ($query2->result() as $row) {
                $id_e = $row->id_e;
            }
        }

        $this->db->where('name_g', $genre);
        $query3 = $this->db->get('genre');
        if ($query3->num_rows() == 1) {
            foreach ($query3->result() as $row) {
                $id_g = $row->id_g;
            }
        }

        $this->db->where('name_l', $library);
        $query4 = $this->db->get('library');
        if ($query4->num_rows() == 1) {
            foreach ($query4->result() as $row) {
                $id_l = $row->id_l;
            }
        }

        $this->db->where('name_c', $collection);
        $query5 = $this->db->get('collection');
        if ($query5->num_rows() == 1) {
            foreach ($query5->result() as $row) {
                $id_c = $row->id_c;
            }
        }

        $this->db->where('name_i', $institute);
        $query6 = $this->db->get('institute');
        if ($query6->num_rows() == 1) {
            foreach ($query6->result() as $row) {
                $id_i = $row->id_i;
            }
        }

        date_default_timezone_set('America/Mexico_City');
        $fecha = getdate();
        $current_date = "$fecha[year]/$fecha[mon]/$fecha[mday]";

        $array = array('id_b'           => $folio,
                        'title'         => $title,
                        'release_year'  => $year,
                        'language'      => $language,
                        'place'         => $place,
                        'pages'         => $pages,
                        'description'   => $description,
                        'classification' => $classification,
                        'edition'       => $number,
                        'copy'          => $copy,
                        'copy_loan'     => '0',
                        'notes_b'       => $notes,
                        'cover'         => $path,
                        'release_date'  => $current_date,
                        'id_a'          => $id_a,
                        'id_e'          => $id_e,
                        'id_g'          => $id_g,
                        'id_l'          => $id_l,
                        'id_c'          => $id_c,
                        'id_i'          => $id_i,
                    );
        $this->db->insert('book', $array);
    }

    function deleteBook($id){
        $this->db->select('cover');
        $this->db->where('id_b', $id);
        $query = $this->db->get('book');
        
        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row) {
                unlink($row->cover);
            }
        }

        $this->db->where('id_b', $id);
        $this->db->delete('book');
    }

    function getCover($id){
        $this->db->select('cover');
        $this->db->where('id_b', $id);
        $query = $this->db->get('book');
        return $query->result();
    }

    function updateBook($id, $folio, $title, $author, $number, $editorial, $year, $place, $genre, $language, $pages,
                        $description, $notes, $copy, $classification, $library, $collection, $institute, $path){

        $this->db->select('id_a, CONCAT(name_a," ",last1_a) AS name', FALSE);
        $query = $this->db->get('author');
        foreach ($query->result() as $row) {
            if ($row->name == $author) {
                $id_a = $row->id_a;
            }
        }
        
        $this->db->where('name_e', $editorial);
        $query2 = $this->db->get('editorial');
        if ($query2->num_rows() == 1) {
            foreach ($query2->result() as $row) {
                $id_e = $row->id_e;
            }
        }

        $this->db->where('name_g', $genre);
        $query3 = $this->db->get('genre');
        if ($query3->num_rows() == 1) {
            foreach ($query3->result() as $row) {
                $id_g = $row->id_g;
            }
        }

        $this->db->where('name_l', $library);
        $query4 = $this->db->get('library');
        if ($query4->num_rows() == 1) {
            foreach ($query4->result() as $row) {
                $id_l = $row->id_l;
            }
        }

        $this->db->where('name_c', $collection);
        $query5 = $this->db->get('collection');
        if ($query5->num_rows() == 1) {
            foreach ($query5->result() as $row) {
                $id_c = $row->id_c;
            }
        }

        $this->db->where('name_i', $institute);
        $query6 = $this->db->get('institute');
        if ($query6->num_rows() == 1) {
            foreach ($query6->result() as $row) {
                $id_i = $row->id_i;
            }
        }

        $array = array('id_b'           => $folio,
                        'title'         => $title,
                        'release_year'  => $year,
                        'language'      => $language,
                        'place'         => $place,
                        'pages'         => $pages,
                        'description'   => $description,
                        'classification' => $classification,
                        'edition'       => $number,
                        'copy'          => $copy,
                        'notes_b'       => $notes,
                        'cover'         => $path,
                        'id_a'          => $id_a,
                        'id_e'          => $id_e,
                        'id_g'          => $id_g,
                        'id_l'          => $id_l,
                        'id_c'          => $id_c,
                        'id_i'          => $id_i,
                    );

        $this->db->where('id_b', $id);
        $this->db->update('book', $array);
    }
}