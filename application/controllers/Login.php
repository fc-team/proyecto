

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

			$this->load->view('registro/nav');
			$this->load->view('registro/login');
			$this->load->view('registro/footer');

	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */


?>
