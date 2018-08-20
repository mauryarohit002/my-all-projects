<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <?php
css("bootstrap");
css("sb-admin");

  ?>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo ctrl('index'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <?php 
        if($this->session->userdata('username') == ""):

         ?>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo ctrl('register'); ?> ">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">register</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo ctrl('login'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">login</span>
          </a>
        </li>
       <?php 
     endif;

        ?>
        <?php 
        if($this->session->userdata('username') != ""):

         ?>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo ctrl('change_password'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">change password</span>
          </a>
        </li> <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo ctrl('logout'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">logout (<?php echo $this->session->userdata('username') ?>)</span>
          </a>
        </li>
       <?php 
     endif;

        ?>
       
          
        </div>
      </ul>
    </div>
  </nav>