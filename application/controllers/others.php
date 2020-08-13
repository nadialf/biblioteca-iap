<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class others extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('otherModel');
  		$this->load->database('default');
	}

	//Libraries

    public function addLibrary(){
		$library = $this->input->post('library');
		$this->otherModel->addLibrary($library);
		redirect(base_url().'admin/others');
	}

	public function deleteLibrary(){
    	$id = $this->uri->segment(3);
    	$this->otherModel->deleteLibrary($id);
    	redirect(base_url().'admin/others');
  	}

  	public function updateLibrary(){
	    $id = $this->uri->segment(3);
	    $library = $this->input->post('library');
	    $this->otherModel->updateLibrary($id, $library); 
	    redirect(base_url().'admin/others'); 
	}


	//Collections

    public function addCollection(){
		$collection = $this->input->post('collection');
		$this->otherModel->addCollection($collection);
		redirect(base_url().'admin/others');
	}

	public function deleteCollection(){
    	$id = $this->uri->segment(3);
    	$this->otherModel->deleteCollection($id);
    	redirect(base_url().'admin/others');
  	}

  	public function updateCollection(){
	    $id = $this->uri->segment(3);
	    $collection = $this->input->post('collection');
	    $this->otherModel->updateCollection($id, $collection); 
	    redirect(base_url().'admin/others'); 
	}


	//Institutes

    public function addInstitute(){
		$institute = $this->input->post('institute');
		$this->otherModel->addInstitute($institute);
		redirect(base_url().'admin/others');
	}

	public function deleteInstitute(){
    	$id = $this->uri->segment(3);
    	$this->otherModel->deleteInstitute($id);
    	redirect(base_url().'admin/others');
  	}

  	public function updateInstitute(){
	    $id = $this->uri->segment(3);
	    $institute = $this->input->post('institute');
	    $this->otherModel->updateInstitute($id, $institute); 
	    redirect(base_url().'admin/others'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/others.php */