<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('loanModel');
  		$this->load->database('default');
	}

    public function addLoan(){
		$reader       = $this->input->post('reader');
		$book         = $this->input->post('book');
        $start_date   = $this->input->post('start_date');
        $end_date     = $this->input->post('end_date');
        $credential   = $this->input->post('credential');
        $notes_l      = $this->input->post('notes_l');

		$this->loanModel->addLoan($reader, $book, $start_date, $end_date, $credential, $notes_l);
		redirect(base_url().'admin/loans/');
	}

    public function deleteLoan(){
        $id = $this->uri->segment(3);
        $this->loanModel->deleteLoan($id);
        redirect(base_url().'admin/loans/');
    }

    public function updateLoan(){
        $id = $this->uri->segment(3);

        $end_date     = $this->input->post('end_date');
        $delivery     = $this->input->post('delivery');
        $credential   = $this->input->post('credential');
        $notes_l      = $this->input->post('notes_l');

        $this->loanModel->updateLoan($id, $end_date, $delivery, $credential, $notes_l);
        redirect(base_url().'admin/loans/');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/loan.php */