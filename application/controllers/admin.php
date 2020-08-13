<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('bookModel');
		$this->load->model('authorModel');
		$this->load->model('editorialModel');
		$this->load->model('genreModel');
		$this->load->model('loanModel');
		$this->load->model('readerModel');
		$this->load->model('otherModel');
  		$this->load->database('default');
	}

	public function index(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/dashboard', $data);
		}
	}

	public function authors(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['author'] 	= $this->authorModel->getAuthor();
			$this->load->view('admin/authorsView', $data);
		}
	}

	public function books(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['exemplar']	= $this->bookModel->getBooks();
			$data['book'] 		= $this->bookModel->getAllBooks();
			$data['author']		= $this->authorModel->getAuthor();
			$data['editorial']	= $this->editorialModel->getEditorial();
			$data['genre']		= $this->genreModel->getGenre();
			$data['library']	= $this->bookModel->getLibrary();
			$data['collection']	= $this->bookModel->getCollection();
			$data['institute']	= $this->bookModel->getInstitute();
			$this->load->view('admin/booksView', $data);
		}
	}

	public function editorials(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['editorial']	= $this->editorialModel->getEditorial();
			$this->load->view('admin/editorialsView', $data);
		}
	}

	public function genres(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['genre']	= $this->genreModel->getGenre();
			$this->load->view('admin/genresView', $data);
		}
	}

	public function others(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['library']	= $this->otherModel->getLibrary();
			$data['collection']	= $this->otherModel->getCollection();
			$data['institute']	= $this->otherModel->getInstitute();
			$this->load->view('admin/othersView', $data);
		}
	}

	public function loans(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();

			$this->loanModel->updateAllLoans();
			$data['loans']		= $this->loanModel->getAllLoans();
			$data['loan']		= $this->loanModel->getLoans();
			$data['reader']		= $this->readerModel->getReader();
			$data['book'] 		= $this->loanModel->getBooks();
			$this->load->view('admin/loansView', $data);
		}
	}

	public function readers(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['reader']		= $this->readerModel->getReader();
			//$data['address'] = $this->readerModel->getAddress();
			$this->load->view('admin/readersView', $data);
		}
	}

	public function reports(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/reportsView', $data);
		}
	}

	public function dashboard(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/dashboard', $data);
		}
	}

	public function flot(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/flot', $data);
		}
	}

	public function morris(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/morris', $data);
		}
	}

	public function forms(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/forms', $data);
		}
	}
	
	public function buttons(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/buttons', $data);
		}
	}

	public function notifications(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/notifications', $data);
		}
	}

	public function typography(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/typography', $data);
		}
	}

	public function icons(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/icons', $data);
		}
	}

	public function grid(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/grid', $data);
		}
	}

	public function blank(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/blank', $data);
		}
	}

	public function login(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('admin/login', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/admin.php */