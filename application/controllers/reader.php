<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reader extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('readerModel');
  		$this->load->database('default');
	}

    public function addReader(){
		$reader 	= $this->input->post('reader');
		$lastName1	= $this->input->post('lastName1');
		$lastName2	= $this->input->post('lastName2');
		$sex        = $this->input->post('sex');
		$phone	    = $this->input->post('phone');
    	$mail		= $this->input->post('mail');
    	$notes		= $this->input->post('notes');

    	$route		                 = $this->input->post('route');
    	$street_number	             = $this->input->post('street_number');
    	$locality		             = $this->input->post('locality');
    	$administrative_area_level_1 = $this->input->post('administrative_area_level_1');
    	$postal_code		         = $this->input->post('postal_code');
    	$country 		             = $this->input->post('country');

		$this->readerModel->addReader($reader, $lastName1, $lastName2, $sex, $phone, $mail, $notes, $route, $street_number, $locality, $administrative_area_level_1, $postal_code, $country);
		redirect(base_url().'admin/readers/');
	}

    public function deleteReader(){
        $id = $this->uri->segment(3);
        $this->readerModel->deleteReader($id);
        redirect(base_url().'admin/readers/');
    }

    public function updateReader(){
        $id = $this->uri->segment(3);

        $reader     = $this->input->post('reader');
        $lastName1  = $this->input->post('lastName1');
        $lastName2  = $this->input->post('lastName2');
        $sex        = $this->input->post('sex');
        $phone      = $this->input->post('phone');
        $mail       = $this->input->post('mail');
        $notes      = $this->input->post('notes');

        $route                       = $this->input->post('route');
        $street_number               = $this->input->post('street_number');
        $locality                    = $this->input->post('locality');
        $administrative_area_level_1 = $this->input->post('administrative_area_level_1');
        $postal_code                 = $this->input->post('postal_code');
        $country                     = $this->input->post('country');

        $this->readerModel->updateReader($id, $reader, $lastName1, $lastName2, $sex, $phone, $mail, $notes, $route, $street_number, $locality, $administrative_area_level_1, $postal_code, $country);
        redirect(base_url().'admin/readers/');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/reader.php */