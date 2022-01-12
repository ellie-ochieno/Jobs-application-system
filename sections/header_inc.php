 <<?php 
      error_reporting(0);
      //suppress error msgs
  ?>
<!DOCTYPE html><!doctype html>
<html lang="en">
  <head>
      <style media="screen">
        ul li a.nav-link{
          color: #fff;
          border: none !important;
        }
        ul li a.nav-link:hover{
          color: red !important;
        }
        .content-sctn {
          width: 100%;
          height: 100%;
          padding: 2% 1%;
          background: #fbfcfc;
          overflow: hidden;
          z-index: 1;
        }
        a.icon-long-arrow-right:hover{
          color: #b6c9cb !important;
        }
        form#cat_sctn{
          text-align: center;
          margin: 30% 2% 1%;
          position: relative;
        }
        form#cat_sctn ul li{
          display: inline-block;
          line-height: 12px;
          margin: 0;
          padding: 0 8px;
          list-style: none;
        }
        button.btn{
          color: #f2f2f2;
          font-weight: bold;
          border-radius: 12px;
        }
        button.btn:hover{
          color: #999;
        }
        button.btn:active{
          color: #f2f2f2;
        }
        label.time_length_directive{
          font-size: 87.5%;
          font-weight: normal;
          color: #333300;
        }
        select#surf_time_lngth{
          width: 30% !important;
          color: #111;
          font-weight: 400;
          background-color:#c4e0e5;
          border: none;
        }
        input#surf_time_lngth:focus{
          border-bottom: 1px solid #252525;
          transition: .5s ease;
        }
        .left-section{
          margin-top: 1% !important;
        }
        button:hover {
        	cursor: pointer;
        }
        .active_link{
          color: red !important;
          font-weight:normal;
        }
        .active_link:hover{
          cursor: pointer;
          text-decoration: underline;
        }

        /* ---loader---- */
        .loader {
          border: 4px solid #f3f3f3;
          border-radius: 50%;
          border-top: 4px solid #3498db;
          width: 30px;
          height: 30px;
          -webkit-animation: spin 4s linear infinite; /* Safari */
          animation: spin 4s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
        /* ---loader---- */

        @media (max-width: 576px) {
          .container {
            width: 100% !important;
            }
            .left-section{
              width: 100% !important;
            }
            footer .container-fluid{
              text-align: center;
            }
            .input-sctn{
              padding: 18% 2% 1% 14%;
            }
            .left-section{
              margin-top: 0 !important;
            }
            .definition-sctn{
              width: 100%;
              padding: 2% 1%;
            }
            ul.definitions{
              width: 100%;
            }
            .img_wrap{
              width: 100%;
              float: right;
            }
            .img_wrap img{
              width: 100% !important;
              height: 100% !important;
              overflow: hidden;
            }
          }
        @media (max-width: 768px) {
          .container {
            width: 100% !important;
            }
            .left-section{
              width: 100% !important;
            }
            .left-section{
              margin-top: 0 !important;
            }
            @media (min-width: 768px) {
              .col-lg-5{
                width: 50% !important;
              }
              .col-lg-7{
                width: 50% !important;
              }
            }
          }
        @media (max-width: 992px) {
          .container {
            width: 100% !important;
            }
          }
        @media (max-width: 1200px) {
          .container {
            width: 100% !important;
            }
          }
      </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <script scr="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.boostrapcdn.com/font-awesome/4.7.0/css/font-awesome.main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis/css?family=Poppins:200,300,400,500,600">
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Favicon -->
    <link rel="icon" href="../static/images/icons/favicons/favicon01.ico">
    <!-- Bootstrap core CSS -->
    <link href="../static/assets_add/css/style.css" rel="stylesheet">
    <link href="../static/assets_add/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/assets_add/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../static/assets_add/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../static/assets_add/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../static/assets_add/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../static/assets_add/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/simple-sidebar.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/style1.css">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1 style="display:block;"><a href="../index.php" class="logo"> <img src="../main/images/AAFCS_logo.png" class="rounded-circle" alt="Cinque Terre" width="68px" height="68px" style="margin-left: 10%;"></a></h1>
        <ul class="list-unstyled components mb-5">
          <li>
          <?php if (isset($_SESSION['user'])) : ?>
            <a href="logout.php"><span class="fas fa-sign-out-alt"></span> <u><?php  echo $_SESSION['user']['username']; ?></u> Sign Out</a>
          <?php endif ?>
          <?php if (!isset($_SESSION['user'])) : ?>
            <a href="../main/proauction_main.php"><span class="fa fa-sign-in"></span> Sign In</a>
          <?php endif ?>
          </li>
        </ul>

        <div class="footer">
          <p style="color: #fff !important;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <b>UoN EIE Dept.</b> | <span style="color: #227dff; font-weight: bold">AAFCS </span>Project</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
          </div>
        </nav>
        <?php
          if (isLoggedIn()) {
            include ("../static/timer.php");
                // extends timer handler file
          }
         ?>
