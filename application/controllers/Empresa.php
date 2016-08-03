<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
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


}
