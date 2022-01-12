<header>
  <?php
      // include "../includes/db_handler.php";
      // calls client registration handler file
   ?>
  <style type="text/css">
  </style>
      <title>Login</title>
</header>
    <!-- Page Content -->
    <div class="left_sctn">
      <div class="slide_sctn">
          <h3 id="left-section-ttl">Section <span class="special_seperator">|</span><span class="active_link"> Login</span></h3>
      </div>
      <div class="info_sctn">
          <!-- <div class="row"> -->
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="index.php" method="post" role="form" class="php-email-form  validate-form">
            <div class="form-column">
            <div class="msg_section mb-0" style="color: green; margin-bottom: .2%;">
                <?php
                    echo "Welcome<br>(Access authentication required!)";
                    // ----error flag notifiers
                ?>
            </div>
              <div class="form-group validate-input" data-validate = "Username required">
                <label>Username/Email</label>
                <input type="text" name="username" class="form-control" id="username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" placeholder="Username/Email" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group validate-input" data-validate = "Phone number required">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" data-rule="minlen:12" data-msg="Password is required" placeholder="password" required/>
                <div class="validate"></div>
              </div>
            </div>
            <div class="text-center"><button class="btn send_btn" onclick="toggle_loader();" type="submit" name="client_login_btn">Login</button></div>
            <div id="loader-section">
              <div class="loader">
              </div>
            </div>
            <br><p style="color: #537895; font-weight: lighter;">Not registered yet?&nbsp;<label onclick="toggle_register_sctn();" style="color: red; font-weight: bold; text-decoration: underline; cursor: pointer;">Register</label> </p>
          </form>
        </div>
    <!-- </div> -->
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
