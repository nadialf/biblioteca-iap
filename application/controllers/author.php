<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class author extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('authorModel');
  		$this->load->database('default');
	}

    public function addAuthor(){
		$author = $this->input->post('author');
		$lastName = $this->input->post('lastName');
		$this->authorModel->addAuthor($author, $lastName);
		redirect(base_url().'admin/authors');
	}

	public function addAuthorB(){
		$author = $this->input->post('author');
		$lastName = $this->input->post('lastName');
		$this->authorModel->addAuthor($author, $lastName);
		redirect(base_url().'admin/books');
	}

	public function deleteAuthor(){
    	$id = $this->uri->segment(3);
    	$this->authorModel->deleteAuthor($id);
    	redirect(base_url().'admin/authors');
  	}

  	public function updateAuthor(){
	    $id = $this->uri->segment(3);
	    $author = $this->input->post('author');
	    $lastName = $this->input->post('lastName');
	    $this->authorModel->updateAuthor($id, $author, $lastName); 
	    redirect(base_url().'admin/authors'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/author.php */