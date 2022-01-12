<?php
    session_start();
        // tracks user session
    include "db_handler.php";
        // calls client registration handler file
    if (isLoggedIn()) {
      $_SESSION['msg'] = "You must LOG IN first";
      header('location: ../index.php');
    }
      // access control
      include 'header_inc.php';
      // extends header file
?>
  <header>
    <link rel="stylesheet" href="../static/css/registration.css">
    <link rel="stylesheet" href="../static/css/style1.css">
    <link rel="stylesheet" href="../static/css/session.css">
    <title>Registration</title>
    <style type="text/css">
      .register_active{
          color: #686868 !important;
        }
        .terms{
          width: 100%;
        }
        .terms ul{
          display: block;
          margin: 1% .2%;
          padding: auto;
        }
        .terms ul li{
          font-family: "Jost", sans-serif;
          font-size: 98.5% !important;
          font-weight: normal;
          color: #666;
          list-style: none;
          padding: .5% 2%;
        }
        span.terms{
          font-family: "Jost", sans-serif;
          font-size: 102.5% !important;
        }
        input.gender_choice{
          background-color: rgb(184, 184, 148);
          cursor: pointer;
        }
        input.form-control{
          background-color: #ccc !important;
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
          background: #113448 !important;
        }
    </style>
  </header>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- /.col-lg-3 -->
          <h3 id="left-section-ttl">Service <span class="special_seperator">|</span><span class="active_link"> Registration</span></h3>
          <div class="content-sctn">
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
              <div class="container" data-aos="fade-up">
                  <div class="row">
                      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="register.php" method="POST" role="form" class="php-email-form  validate-form">
                          <div class="form-column">
                          <div class="msg_section mb-2" style="color: red; margin-bottom: 4%;">
                            <?php
                                echo display_error();
                                // ----error flag notifiers
                            ?>
                          </div>
                            <div class="form-group validate-input" data-validate = "Username required">
                              <label>First name</label>
                              <input type="text" name="fname" class="form-control" id="fname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="First name" required/>
                              <div class="validate"></div>
                            </div>
                            <div class="form-group validate-input" data-validate = "Email required">
                              <label>Last name</label>
                              <input type="text" name="lname" class="form-control" id="lname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="Last name" required/>
                              <div class="validate"></div>
                            </div>
                            <div class="form-group validate-input" data-validate = "Username required">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="username" required/>
                              <div class="validate"></div>
                            </div>
                            <div class="form-group validate-input" data-validate = "Email required">
                              <label>Email</label>
                              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" placeholder="email" required/>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="form-group validate-input" data-validate = "Phone number required">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" data-rule="minlen:12" data-msg="Phone number must be 12 characters" placeholder="e.g 254700000000" required/>
                            <div class="validate"></div>
                          </div>
                          <div class="form-group validate-input" data-validate = "Phone number required">
                            <label>M-Pesa Number</label>
                            <input type="text" class="form-control" name="m_pesa_no" id="m_pesa_no" data-rule="minlen:12" data-msg="Phone number must be 12 characters" placeholder="e.g 254700000000" required/>
                            <div class="validate"></div>
                          </div>
                          <div class="form-group validate-input">
                            <label>Referral</label>
                            <input type="text" class="form-control" name="referral" id="referral" data-rule="" data-msg="" placeholder="Referral name(optional)"/>
                            <div class="validate"></div>
                          </div>
                          <div class="form-group validate-input" data-validate="Password is required">
                              <label>Password</label>
                              <input type="password" class="form-control" name="password_1" id="password_1" data-rule="minlen:6" placeholder="Password" required/>
                              <div class="validate"></div>
                          </div>
                          <div class="form-group validate-input" data-validate="Password is required">
                              <label>Confirm</llabel>
                              <input type="password" class="form-control" name="password_2" id="password_2" data-rule="minlen:6" placeholder="Password" required/>
                              <div class="validate"></div>
                          </div>
                          <div class="terms" id="terms">
                            <label for="">&nbsp;Agree to <a href="terms.php" style="text-decoration: underline;">terms and conditions</a></label>
                            <ul>
                              <li class="terms"> <span style="font-size: 102.5% !important;">I agree</span> <br><input class="terms_choice" type="radio" name="terms" value="agree" not-checked></li>
                              <li> <span style="display:none;">I do not agree</span> <br><input class="terms_choice" type="radio" name="terms" value="donot_agree" style="display:none;" checked></li>
                            </ul>
                          </div>
                          <div class="text-center"><button class="btn send_btn" onclick="toggle_loader();" type="submit" onclick="" name="register_btn">Register</button></div>
                          <div id="loader-section">
                            <div class="loader">
                            </div>
                          </div>
                          <br><p style="color: #fff; font-weight: lighter;">OR Already have an account?&nbsp;<a href="../main/proauction_main.php" style="color: red; font-weight: bold; text-decoration: underline;">Login</a> </p>
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
    var terms_optn, terms_optn_choice, fname, lname, user_id, email,
        phone, m_pesa_no, referral, user_pwd_1, user_pwd_2;
    fname = document.getElementById('fname').value;
    lname = document.getElementById('$lname').value;
    user_id = document.getElementById('name').value;
    email = document.getElementById('email').value;
    phone = document.getElementById('phone').value;
    m_pesa_no = document.getElementById('m_pesa_no').value;
    referral = document.getElementById('referral').value;
    user_pwd_1 = document.getElementById('password_1').value;
    user_pwd_2 = document.getElementById('password_2').value;
    function toggle_loader(){
      if (fname !="" && lname !="" && user_id !="" && email !="" && phone !="" && m_pesa_no !="" && referral !="" && user_pwd_1 !="" && user_pwd_2 !="") {
        document.getElementById('loader-section').style.display = "block";
        // displays loader
      }
    }

    function get_terms_optn(){
      var terms_optn_select = document.getElementsByName('terms');
      console.log(terms_optn_select);
      terms_optn_select.forEach(e => {
      if (e.checked) {
          //if radio button is checked, set sort style
          terms_optn_choice = e.value;
          if (terms_optn_choice === "agree") {
            alert("Terms: "+ terms_optn_choice);
          }
          if (terms_optn_choice === "donot_agree") {
            alert("Registration aborted!");
          }
      }
      if (terms_optn_choice !=="agree" && terms_optn_choice !=="donot_agree") {
        alert("Agree to terms required!");
      }
    });
        // grabs terms value from checked radio button
    }
  </script>
    <?php
      include "footer_inc.php";
        // extends footer file
     ?>
