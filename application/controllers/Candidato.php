candidato<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Candidato_model');
    $this->load->model('Usuario_model');



    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $this->load->view('candidato/nav');
    $this->load->view('role/candidato');
    $this->load->view('candidato/footer');  }

  function contact(){
     $this->load->view('candidato/nav');
      $this->load->view('site/contact');
      $this->load->view('candidato/footer');  }

  function Privacy(){
     $this->load->view('candidato/nav');
     $this->load->view('site/privacy');
     $this->load->view('candidato/footer');  }

  function Principal(){
       $this->load->view('candidato/nav');
       $this->load->view('role/Candidato');
      $this->load->view('candidato/footer');  }

  function search(){
     $this->load->view('candidato/nav');
      $this->load->view('site/search');
      $this->load->view('candidato/footer');  }

  function About(){
    $this->load->view('candidato/nav');
     $this->load->view('site/about');
    $this->load->view('candidato/footer');  }


function guardarCandidato(){

  if ($_POST) {

    $this->Candidato_model->guardar($_POST);

    # code...
  }
else {
    $this->load->view('site/datosNoGuardados');
  # code...
}

$this->load->view('site/datosGuardados');

}

public function guardarUsuario($datos)
{
  if ($_POST) {

    $this->Usuario_model->guardar($_POST);

    # code...
  }
  $this->load->view('site/datosGuardados');
}

public function verCandidatos(){
  $data = array();
  $data['candidatos'] = $this->Candidato_model->listarCandidatos();



  $this->load->view('candidato/nav');
   $this->load->view('candidato/verCandidatos', $data);
  $this->load->view('candidato/footer');

}


  # code...

}
