<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo base_url();?>Site/images/favicon.ico " type="image/x-icon">
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="<?php echo base_url('css/camera.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/search.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/google-map.css');?>">


    <!--JS-->
    <script src="<?php echo base_url('js/jquery.js');?>"></script>
    <script src="<?php echo base_url('js/jquery-migrate-1.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('js/rd-smoothscroll.min.js');?>"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="<?php echo base_url();?>js/html5shiv.js"></script>
    <![endif]-->
    <script src='<?php echo base_url('js/device.min.js');?>'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
  <header>


      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'  href="./">business<small>NONDRAB</small></a>
          </h1>
          <a class="search-form_toggle" href="#"></a>
        </div>

        <div class="help-box text-right">
          <p>Necesitas ayuda?</p>
          <a href="callto:#">800-2345-6789</a>
          <small><span>Hours:</span>  6am-4pm PST M-Th; &nbsp;6am-3pm PST Fri</small>
        </div>
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">
        <nav class="navbar navbar-default navbar-static-top pull-left">

            <div class="">
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li class="active">
                  <a href="<?php echo base_url('Site/Principal')?>">INICIO</a>
                </li>
                <li>
                  <a href="<?php echo base_url('Site/About')?>">NOSOTROS</a>
                </li>

                <li class="dropdown">
                
                  <a href="">REGISTRATE<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="<?php echo base_url('Site/login_candidato')?>">CANDIDATO</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('Site/login_empresa');?>">EMPRESA</a>
                    </li>

                  </ul>
                </li>
                <li class="dropdown">
                  <a href="">VER CV<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">TODOS LOS CURRICULUM</a>
                    </li>
                    <li>
                      <a href="#">CURRICULUM POR AREA</a>
                    </li>
                    <li>
                      <a href="#">AGREGAR MI CURRICULUM</a>
                    </li>

                  </ul>
                </li>
                <li class="dropdown">
                  <a href="">EMPLEOS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">OFERTAS DE EMPLEO</a>
                    </li>
                    <li>
                      <a href="#">OFERTAS DE EMPLEO POR AREA</a>
                    </li>
                    <li>
                      <a href="#">PUBLICAR OFERTAS DE EMPLEO</a>
                    </li>

                  </ul>
                </li>

                
              </ul>
            </div>
        </nav>
        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>

        </div>

      </div>
    </header>
