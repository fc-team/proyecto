

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
	}

	public function index()
	{

<<<<<<< HEAD
			$this->load->view('registro/nav');
			$this->load->view('registro/login');
			$this->load->view('registro/footer');
=======
			$this->load->view('login/nav');


			
		$this->load->view('login/login');
	$this->load->view('login/footer');

	}


	function entrar(){

		if ($_POST){

			$usuario=$_POST['user_name'];
			$clave=$_POST['pass'];

			$tmp=$this->Usuario_model->entrar($usuario,$clave);


			if($tmp !== false   ){

				if($tmp->id_rol==1){
					 $this->load->view('candidato/nav');
           $this->load->view('role/candidato',$tmp);
          $this->load->view('candidato/footer');

       


				}

				elseif($tmp->id_rol==2){
					 $this->load->view('empresa/nav');
           $this->load->view('role/empresa',$tmp);
          $this->load->view('empresa/footer');

          


				}


				elseif($tmp->id_rol==3){
					 $this->load->view('administrador/nav');
           $this->load->view('role/administrador',$tmp);
          $this->load->view('administrador/footer');



				}
          


           
       $_SESSION['usuario'] = $tmp->user_name;


    } else {
              $this->load->view('usuario/error');
           }



		}


>>>>>>> 71dff2fd3af236428d7fae14517b68070f180f40

	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */


?>
