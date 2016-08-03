<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->model('Empresa_model');
      $this->load->model('Usuario_model');
  }

  function index()
  {

    $this->load->view('empresa/nav');
    $this->load->view('role/empresa');
    $this->load->view('empresa/footer');  }

    function publicar(){

      $this->load->view('registro/empresa/nav');
      $this->load->view('registro//empresa/oferta');
      $this->load->view('registro/empresa/footer');
    }

  function service(){
     $this->load->view('empresa/nav');
     $this->load->view('site/service');
       $this->load->view('empresa/footer');  }

  function contact(){
     $this->load->view('empresa/nav');
      $this->load->view('site/contact');
      $this->load->view('empresa/footer');  }

  function Privacy(){
     $this->load->view('empresa/nav');
     $this->load->view('site/privacy');
     $this->load->view('empresa/footer');  }

  function Principal(){
       $this->load->view('empresa/nav');
       $this->load->view('role/empresa');
      $this->load->view('empresa/footer');  }

  function search(){
     $this->load->view('empresa/nav');
      $this->load->view('site/search');
      $this->load->view('empresa/footer');  }

  function About(){
    $this->load->view('empresa/nav');
     $this->load->view('site/about');
    $this->load->view('empresa/footer');  }


    function guardarEmpresa(){

      if ($_POST) {

        $this->Empresa_model->guardar($_POST);
        $this->load->view('site/datosGuardados');
        # code...
      }
      else {
        $this->load->view('site/datosNoGuardados');
      # code...
    }

  }

  public function guardarUsuario($datos)
  {
    if ($_POST) {

      $this->Usuario_model->guardar($_POST);

      # code...
    }
    $this->load->view('site/datosGuardados');
  }

        # code...

    }
