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
    $this->load->view('partial/nav');
    $this->load->view('site/principal');
    $this->load->view('partial/footer');  }

  function service(){
     $this->load->view('partial/nav');
     $this->load->view('site/service');
       $this->load->view('partial/footer');  }

  function contact(){
     $this->load->view('partial/nav');
      $this->load->view('site/contact');
      $this->load->view('partial/footer');  }

  function Privacy(){
     $this->load->view('partial/nav');
     $this->load->view('site/privacy');
     $this->load->view('partial/footer');  }
  function Principal(){
       $this->load->view('partial/nav');
       $this->load->view('site/principal');
      $this->load->view('partial/footer');  }

  function search(){
     $this->load->view('partial/nav');
      $this->load->view('site/search');
      $this->load->view('partial/footer');  }

  function About(){
    $this->load->view('partial/nav');
     $this->load->view('site/about');
    $this->load->view('partial/footer');  }

    function login(){
<<<<<<< HEAD
       $this->load->view('partial/nav');
=======
>>>>>>> origin/omarlin

      
      $this->load->view('registro/nav');
       $this->load->view('registro/login');
<<<<<<< HEAD

    $this->load->view('partial/footer');  }

    function profesional(){
       $this->load->view('partial/nav');

       $this->load->view('role/candidato');

    $this->load->view('partial/footer');  }
=======
        $this->load->view('registro/footer');
   
}
>>>>>>> origin/omarlin

}
