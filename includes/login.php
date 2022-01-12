<?php
    session_start();
        // tracks user session
    include "db_handler.php";
    // calls client registration handler file
    include 'header_inc.php';
        // extends header file
?>
  <header>
    <link rel="stylesheet" href="../static/css/registration.css">
    <link rel="stylesheet" href="../static/css/style1.css">
    <link rel="stylesheet" href="../static/css/session.css">
    <title>Login</title>
    <style type="text/css">
      .login_active{
          color: #686868 !important;
        }
        #loader-section{
          display: none;
        }
        .content-sctn,
        .col-lg-7,
        .row,
        section,
        form,
        body{
          background: #fff !important;
        }
    </style>
  </header>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
          <h3 id="left-section-ttl">Service <span class="special_seperator">|</span><span class="active_link"> Admin access</span></h3>
          <div class="content-sctn">
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
              <div class="container" data-aos="fade-up">
                  <div class="row">
                      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="login.php" method="post" role="form" class="php-email-form  validate-form">
                          <div class="form-column">
                          <div class="msg_section mb-2" style="color: green; margin-bottom: 2%;">
                              <?php
                                  echo "Welcome<br>(Access authentication required!)";
                                  // ----error flag notifiers
                              ?>
                          </div><br>
                          <div class="msg_section mb-2" style="color: red; margin-bottom: 4%;">
                              <?php
                                  echo display_error();
                                  // ----error flag notifiers
                              ?>
                          </div><br>
                            <div class="form-group validate-input" data-validate = "Username required">
                              <label>Admin Username</label>
                              <input type="text" name="username" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="username" required/>
                              <div class="validate"></div>
                            </div>
                            <div class="form-group validate-input" data-validate = "Phone number required">
                              <label>Password</label>
                              <input type="password" class="form-control" name="password" id="password" data-rule="minlen:12" data-msg="Password is required" placeholder="password" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="text-center"><button class="btn send_btn" onclick="toggle_loader();" type="submit" name="login_btn">Access</button></div>
                          <div id="loader-section">
                            <div class="loader">
                            </div>
                          </div>
                          <!-- <br><p style="color: darkblue; font-weight: lighter;">OR Do not have an account yet?&nbsp;<a href="register.php" style="color: red; font-weight: bold; text-decoration: underline;">Register</a> </p> -->
                        </form>
                      </div>
                  </div>
              </div>
            </section><!-- End Contact Section -->
          </div>
              <!-- -----qstn1 section---- -->
      </div>
    </div>
  </div>
</div>
  <script>
    var user_id, user_pwd;
    user_id = document.getElementById('name').value;
    user_pwd = document.getElementById('password').value;
    function toggle_loader(){
      if (user_id !="" && user_pwd !="") {
        document.getElementById('loader-section').style.display = "block";
        // displays loader
      }
    }
  </script>
    <?php
      include "footer_inc.php";
        // extends footer file
     ?>
