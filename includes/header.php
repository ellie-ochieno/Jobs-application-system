<!DOCTYPE html><!doctype html>
<html lang="en">
  <head>
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
    <link class="rounded-circle" alt="Cinque Terre" rel="icon" href="sections/imgs/logo1.webp">
    <!-- Bootstrap core CSS -->

    <!-- ---------tables handler--------- -->
    <link href="includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
    <link href="includes/admin/tables_handler/index.css" rel="stylesheet">
    <link href="includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/mindmup-editabletable.js"></script>
    <script src="includes/admin/tables_handler/numeric-input-example.js"></script>
    <!-- ---------tables handler--------- -->
    <link href="static/assets_add/css/style.css" rel="stylesheet">
    <link href="static/assets_add/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/assets_add/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="static/assets_add/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="static/assets_add/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="static/assets_add/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="static/assets_add/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/simple-sidebar.css">
    <link rel="stylesheet" href="static/css/header.css">
    <link rel="stylesheet" href="static/css/style.css">
    <!-- <link rel="stylesheet" href="static/css/style1.css"> -->
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active" style="background-color: #113448 !important;">
				<h1 style="display: block;"><a href="index.php" class="logo"><img src="sections/imgs/logo1.webp" class="rounded-circle" alt="Cinque Terre" width="68px" height="68px" style="margin-left: 10%;"></a></h1>
        <ul class="list-unstyled components mb-5"><br>
          <li class="index_active">
            <label class="nav-link" type="button" onclick="toggle_home_sctn();"><span class="fa fa-home"></span> Home</label>
          </li>
          <li class="subjects_active">
              <label class="nav-link" type="button" onclick="toggle_sbjct_scores_sctn();"><span class="fa fa-gamepad"></span> Subject scores</label>
          </li>
          <li class="transcripts_active">
              <label class="nav-link" type="button" onclick="toggle_transcript_sctn();"><span class="fas fa-fan"></span> Transcripts</label>
          </li>
          <li class="registration_active">
              <label class="nav-link" type="button" onclick="toggle_register_sctn();"><span class="fa fa-qrcode"></span> Register</label>
          </li>
          <li class="login_active">
            <label class="nav-link" type="button" onclick="toggle_login_sctn();"><span class="fa fa-question-circle"></span> Login</label>
          </li>
        </ul>
        <div class="footer">
            <p style="color: #fff !important;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <b>AIP University EIE Dept.</b> | All <span style="color: #227dff; font-weight: bold"><a href="#">Terms</a> </span>Reserved</p>
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
              <ul class="nav navbar-nav ml-auto">
                  <?php if (isset($_SESSION['user'])) : ?>
                    <li class="nav-item how_to_active">
                        <a class="nav-link" href="sections/logout.php" title="Sign out"><b>Sign Out <span style="color: #444; font-weight: bolder;">| </span></b><span style="color: red;"><?php  echo $_SESSION['user']['First_Name'.' Last_Name']; ?></span></a>
                    </li>
                  <?php endif ?>
                  <?php if (!isset($_SESSION['user'])) : ?>
                    <li class="nav-item how_to_active">
                        <label type="button" class="nav-link" onclick="toggle_login_sctn();"><b>Student <span style="color: #444; font-weight: bolder;">| </span></b><span style="color: red;"> Sign In</span></label>
                    </li>
                  <?php endif ?>
              </ul>
            </div>
          </div>
        </nav>
