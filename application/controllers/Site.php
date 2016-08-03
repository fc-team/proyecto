<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller{


  

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $this->load->view('Partial/nav');
    $this->load->view('site/Principal');
    $this->load->view('Partial/footer');  }

  function contact(){
     $this->load->view('Partial/nav');
      $this->load->view('site/contact');
      $this->load->view('Partial/footer');  }

  function Privacy(){
     $this->load->view('Partial/nav');
     $this->load->view('site/privacy');
     $this->load->view('Partial/footer');  }

  function Principal(){
       $this->load->view('Partial/nav');
       $this->load->view('site/principal');
      $this->load->view('Partial/footer');  }

  function search(){
     $this->load->view('Partial/nav');
      $this->load->view('site/search');
      $this->load->view('Partial/footer');  }

  function About(){
    $this->load->view('Partial/nav');
     $this->load->view('site/about');
    $this->load->view('Partial/footer');  }



function login_empresa(){
    $this->load->view('registro/empresa/nav');
     $this->load->view('registro/empresa/login');
    $this->load->view('registro/empresa/footer');  

  }
function login_candidato(){
    $this->load->view('registro/candidato/nav');
     $this->load->view('registro/candidato/login');
    $this->load->view('registro/candidato/footer');  

  }



}