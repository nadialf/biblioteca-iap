<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class genre extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('genreModel');
  		$this->load->database('default');
	}

    public function addGenre(){
		$genre = $this->input->post('genre');
		$this->genreModel->addGenre($genre);
		redirect(base_url().'admin/genres');
	}

	public function deleteGenre(){
    	$id = $this->uri->segment(3);
    	$this->genreModel->deleteGenre($id);
    	redirect(base_url().'admin/genres');
  	}

  	public function updateGenre(){
	    $id = $this->uri->segment(3);
	    $genre = $this->input->post('genre');
	    $this->genreModel->updateGenre($id, $genre); 
	    redirect(base_url().'admin/genres'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/genre.php */