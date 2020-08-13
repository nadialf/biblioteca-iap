<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editorial extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('editorialModel');
  		$this->load->database('default');
	}

	public function addEditorial(){
		$editorial = $this->input->post('editorial');

		$this->editorialModel->addEditorial($editorial);
		redirect(base_url().'admin/editorials');
	}

    public function addEditorialB(){
		$editorial = $this->input->post('editorial');

		$this->editorialModel->addEditorial($editorial);
		redirect(base_url().'admin/books');
	}

	public function deleteEditorial(){
    	$id = $this->uri->segment(3);
    	$delete = $this->editorialModel->deleteEditorial($id);
    	redirect(base_url().'admin/editorials');
  }

  	public function updateEditorial(){
	    $id = $this->uri->segment(3);
	    $editorial = $this->input->post('editorial');
	    $this->editorialModel->updateEditorial($id, $editorial); 
	    redirect(base_url().'admin/editorials'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/editorial.php */