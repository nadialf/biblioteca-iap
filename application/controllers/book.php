<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class book extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('bookModel');
  		$this->load->database('default');
	}

    public function addBook(){
		$folio 		= $this->input->post('folio');
		$title		= $this->input->post('title');
		$author		= $this->input->post('author');
		$number		= $this->input->post('number');
		$editorial	= $this->input->post('editorial');
    	$year		= $this->input->post('year');
    	$place		= $this->input->post('place');
    	$genre		= $this->input->post('genre');
    	$language	= $this->input->post('language');
    	$pages		= $this->input->post('pages');
    	$description = $this->input->post('description');
    	$notes		= $this->input->post('notes');
    	$copy 		= $this->input->post('copy');
    	$classification = $this->input->post('classification');
    	$library	= $this->input->post('library');
    	$collection	= $this->input->post('collection');
    	$institute	= $this->input->post('institute');
        $userfile   = $this->input->post('userfile');

        if ( isset($_FILES['userfile']) && $_FILES['userfile']['size'] > 0 ) {
            $cover = 'userfile';
            $config['upload_path'] = 'img/covers';
            $config['file_name'] = $folio;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['overwrite'] = TRUE; 
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
                
            if ( ! $this->upload->do_upload($cover)) {
                echo $this->upload->display_errors(); 
                $this->load->view('admin/blank'); 
            } else { 
                $uploadData = $this->upload->data();
                $path = 'img/covers/'.$uploadData['file_name'];

                $this->bookModel->addBook($folio, $title, $author, $number, $editorial, $year, $place, $genre, $language, $pages, $description, $notes, $copy, $classification, $library, $collection, $institute, $path);
                redirect(base_url().'admin/books');
            }
        } else {  
            $this->bookModel->addBook($folio, $title, $author, $number, $editorial, $year, $place, $genre, $language, $pages, $description, $notes, $copy, $classification, $library, $collection, $institute, $userfile);
            redirect(base_url().'admin/books');
        }
	}

    public function deleteBook(){
        $id = $this->uri->segment(3);
        $this->bookModel->deleteBook($id);
        redirect(base_url().'admin/books');
    }

    public function updateBook(){
        $id = $this->uri->segment(3);
        $folio      = $this->input->post('folio');
        $title      = $this->input->post('title');
        $author     = $this->input->post('author');
        $number     = $this->input->post('number');
        $editorial  = $this->input->post('editorial');
        $year       = $this->input->post('year');
        $place      = $this->input->post('place');
        $genre      = $this->input->post('genre');
        $language   = $this->input->post('language');
        $pages      = $this->input->post('pages');
        $description = $this->input->post('description');
        $notes      = $this->input->post('notes');
        $copy       = $this->input->post('copy');
        $classification = $this->input->post('classification');
        $library    = $this->input->post('library');
        $collection = $this->input->post('collection');
        $institute  = $this->input->post('institute');
        $userfile   = $this->input->post('userfile');

        if ( isset($_FILES['userfile']) && $_FILES['userfile']['size'] > 0 ) {
            $cover = 'userfile';
            $config['upload_path'] = 'img/covers';
            $config['file_name'] = $folio;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['overwrite'] = TRUE; 
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
                
            if ( ! $this->upload->do_upload($cover)) {
                echo $this->upload->display_errors(); 
                $this->load->view('admin/blank'); 
            } else { 
                $uploadData = $this->upload->data();
                $path = 'img/covers/'.$uploadData['file_name'];

                $this->bookModel->updateBook($id, $folio, $title, $author, $number, $editorial, $year, $place, $genre, $language, $pages, $description, $notes, $copy, $classification, $library, $collection, $institute, $path);
                redirect(base_url().'admin/books');
            }
        } else {
            $query = $this->bookModel->getCover($id);
            foreach ($query as $row){
                $front = $row->cover;
            }

            $this->bookModel->updateBook($id, $folio, $title, $author, $number, $editorial, $year, $place, $genre, $language, $pages, $description, $notes, $copy, $classification, $library, $collection, $institute, $front);
            redirect(base_url().'admin/books');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/author.php */