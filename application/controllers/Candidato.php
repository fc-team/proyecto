candidato<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
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
}
