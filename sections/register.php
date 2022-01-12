<header>
  <style type="text/css">
    ul li.index_active label.nav-link,
    ul li.applied_jobs_active label.nav-link,
    ul li.post_job_active label.nav-link,
    ul li.new_jobs_active label.nav-link,
    ul li.login_active label.nav-link{
      background-color: #113448;
    }
    ul li.registration_active label.nav-link{
      background-color: #113448;
    }
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
      .info_sctn{
        margin-left: 18%;
      }
     @media (max-width: 769px) {
     .info_sctn{
         margin-left: 20%;
         /* text-align: center; */
        }
     }
    @media (max-width: 576px) {
      .info_sctn{
        margin-left: .1%;
        /* text-align: center; */
       }
      }
  </style>
      <title>Registration</title>
</header>
<div class="left_sctn">
  <div class="slide_sctn">
      <h3 id="left-section-ttl">Section <span class="special_seperator">|</span><span class="active_link"> Registration</span></h3>
  </div>
  <div class="info_sctn">
    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
      <form action="index.php" method="POST" role="form" class="php-email-form  validate-form">
        <div class="form-column">
        <div class="msg_section mb-0" style="color: green; margin-bottom: .2%;">
            <?php
                echo "Create an account!";
                // ----error flag notifiers
            ?>
        </div><br>
          <div class="form-group validate-input" data-validate = "Username required">
            <label>First name</label>
            <input type="text" name="f_name" class="form-control" id="f_name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="first name" required/>
            <div class="validate"></div>
          </div>
          <div class="form-group validate-input" data-validate = "Email required">
            <label>Last name</label>
            <input type="text" name="l_name" class="form-control" id="l_name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="last name" required/>
            <div class="validate"></div>
          </div>
          <div class="form-group validate-input" data-validate = "Email required">
            <label>Username</label>
            <input type="text" name="username" class="form-control" id="username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="username" required/>
            <div class="validate"></div>
          </div>
          <div class="form-group validate-input" data-validate = "Email required">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" placeholder="email" required/>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group validate-input" data-validate="Password is required">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password" data-rule="minlen:6" placeholder="password" required/>
            <div class="validate"></div>
            <small style="color: #4c93e6;">Password MUST be at least 8 characters long.</small>
        </div>
        <div class="form-group validate-input" data-validate="Password is required">
            <label>Confirm</llabel>
            <input type="password" class="form-control" name="password_confirm" id="password_confirm" data-rule="minlen:6" placeholder="confirm password" required/>
            <div class="validate"></div>
        </div>
        <div class="text-center"><button class="btn send_btn" onclick="toggle_loader();" type="submit" onclick="" name="client_register_btn">Register</button></div>
        <div id="loader-section">
          <div class="loader">
          </div>
        </div>
        <br><p style="color: #537895; font-weight: lighter;">Already have an account?&nbsp;<label onclick="toggle_login_sctn();" style="color: red; font-weight: bold; text-decoration: underline; cursor: pointer;">Login</label> </p>
      </form>
    </div>
  </div>
</div>
