<?php
    session_start();
        // tracks user session
    include "sections/db_handler.php";
        // calls client registration handler file
    include "sections/header.php";
        // extends external header file
    include "internal_header.php";
        // extends internal header file
?>
      <div class="home_sctn" id="home_sctn">
       <header>
         <style type="text/css">
           ul li.transcripts_active label.nav-link,
           ul li.subjects_active label.nav-link,
           ul li.login_active label.nav-link,
           ul li.registration_active label.nav-link{
             background-color: #113448;
           }
           ul li.index_active label.nav-link{
             background-color: #113448;
           }
           p{
             height: auto;
             font-family: Helvetica;
             src: url('../fonts/poppins/Poppins-Regular.ttf');
             font-size: 122.5%;
             margin: 2% 4%;
             color: #444;
           }
           .left_sctn ul{
             width: 80%;
             padding: 1% 4%;
           }
           .left_sctn ul li{
             list-style: none;
           }
           .wlcm_sctn{
             width: auto;
             height: auto;
             margin: 2% .5%;
             padding: 2% 3%;
             background-color: #ccc;
             overflow: hidden;
             border-radius: 8px;
             border-left: 4px solid maroon;
           }
           h2.sctn_ttl{
             font-size: 120%;
             color: #405580;
             font-weight: bold;
           }
           .tips_sctn{
             width: 100%;
             padding: 1% 2%;
             background-color: #f2f2f2;
             border-left: 1px solid maroon;
           }
           ul.tips_info{
             width: 100%;
             margin: .4% 1%;
           }
           ul.tips_info li{
             font-size: 106%;
           }
           #new_jobs_sctn,
           #applied_jobs_sctn,
           #posted_jobs_sctn,
           #reg_users_sctn,
           #applications_sctn,
           #register_sctn,
           #login_sctn,
           #logout_sctn{
             display: none;
           }
           @media (max-width: 576px) {
               .img_sctn{
                 width: 100%;
                 height: 70%;
                 margin: 1%;
                 float: none;
                 overflow: hidden;
               }
               .img_sctn img{
                 width: 100%;
                 height: 70%;
                 overflow: none;
               }
               .wlcm_sctn{
                 width: 100%;
                 margin: 4% 2%;
               }
             }
         </style>
         <title>Home</title>
       </header>
        <div class="left_sctn">
          <div class="notification_sctn">
              <div class="msg_section mb-2" style="color: red;">
                <?php
                    echo display_error();
                    // ----error flag notifiers
                ?>
              </div>
              <div class="msg_section mb-2" style="color: green;">
                <?php
                    echo flash_alert_display();
                    if(isset($successMsg))
                    {
                      echo "<div class='success-msg'>";
                      print_r($successMsg);
                      echo "</div>";
                    }
                    // ----alert msg notifier
                ?>
              </div>
          </div>
          <div class="slide_sctn">
              <h3 id="left-section-ttl">Section <span class="special_seperator">|</span><span class="active_link"> Kazisasa.com</span></h3>
          </div>
          <div class="img_sctn">
            <img class="img_wrap" src="sections/imgs/bgnd.png" alt="">
          </div>
             <div class="wlcm_sctn">
            <p>
               Welcome to <span class="special">Kazisasa.com</span>&nbsp;Your best jobs connecion platform.
               <div class="sections-seperator">
                 <hr>
                   <span class="dot"></span>
                   <span class="dot"></span>
                   <span class="dot"></span>
               </div>
                 <!-- seperator line -->
            </p>
          </div><br>
            <h2 class="sctn_ttl"><span><i class="fas fa-check-double" style="color: maroon;"></i></span>&nbsp;Tips for applying for jobs online</h2>
              <p>
                You might think that submitting a generic résumé for dozens of different jobs online is a great job search strategy. But if it’s easy for you to apply,
                then it will be easy for everyone else, so it’s likely that you will be competing with lots - sometimes even hundreds - of other job seekers, especially for entry level jobs. <br>
                If you make the effort to stand out from the crowd you may have a better chance of securing an interview.</p><br>
                <div class="tips_sctn">
                  <p>
                  <span style="color: #405580"><u>Five tips may increase your chances of success when applying online:</u></span><br>
                  <ul class="tips_info">
                    <li>
                      <span><i class="far fa-check-square" style="color: red;"></i></span>. <b>Read the job description carefully.</b>
                       Make sure you have the skills and experience that the employer is looking for. Think about previous situations
                       when you demonstrated the relevant skills and behaviours the employer requires and how you could clearly express this in your application.
                    </li>
                    <li>
                      <span><i class="far fa-check-square" style="color: red;"></i></span>&nbsp;<b>Tailor your application.</b>
                       You must tailor your cover letter and résumé to the specific employer and ensure you include keywords in your application.
                       Many online recruiters use IT programs to scan and automatically discard applications that don’t include specific words.
                    </li>
                    <li>
                      <span><i class="far fa-check-square" style="color: red;"></i></span>&nbsp;<b>Fill out every field in the application.</b>
                      This is an easy way to provide as much information as you can while demonstrating your interest and enthusiasm for the job. Attention
                      to detail is important to make sure your application is complete and error-free.
                    </li>
                    <li>
                      <span><i class="far fa-check-square" style="color: red;"></i></span>&nbsp;<b> Review your social media profile. </b>
                       If you are applying for jobs online, make sure you have a positive online presence. Many employers will look you up online
                       to verify the claims in your application. You should check your social media privacy settings to ensure employers
                       can’t access any information you would rather they didn’t see. For more information read our article ‘Manage your digital identity’.
                    </li>
                    <li>
                      <span><i class="far fa-check-square" style="color: red;"></i></span>&nbsp;<b>Triple-check your content for spelling, content, and grammar mistakes. </b>
                       Review your application before you submit it. Once you click ‘submit’ your information is sent directly to the recruiter. Remember that first
                       impressions count, so make the best one you can when you apply.
                    </li>
                  </ul>
                  <br><br></p>
                </div>
                <div class="sections-seperator">
                  <hr>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                  <!-- seperator line -->
        </div>
      </div>
        <!-- ---------------Home page section---------------- -->

      <div class="new_jobs_sctn" id="new_jobs_sctn">
        <?php include "sections/new_jobs.php"; ?>
      </div>
        <!-- ---------------New jobs section---------------- -->

      <div class="applied_jobs_sctn" id="applied_jobs_sctn">
        <?php include "sections/applied_jobs.php"; ?>
      </div>
        <!-- ---------------Applied Jobs section------------ -->

      <div class="posted_jobs_sctn" id="posted_jobs_sctn">
        <?php include "sections/post_jobs.php"; ?>
      </div>
        <!-- ---------------Post Jobs section--------------- -->

      <div class="reg_users_sctn" id="reg_users_sctn">
        <?php include "sections/reg_users.php"; ?>
      </div>
        <!-- ---------------Registered users section--------------- -->

      <div class="applications_sctn" id="applications_sctn">
        <?php include "sections/applications.php"; ?>
      </div>
        <!-- ---------------Applications section--------------- -->

      <div class="register_sctn" id="register_sctn">
        <?php include "sections/register.php"; ?>
      </div>
        <!-- ---------------Register section---------------- -->

      <div class="login_sctn" id="login_sctn">
        <?php include "sections/login.php"; ?>
      </div>
        <!-- ---------------Login section---------------- -->

      <div class="logout_sctn" id="logout_sctn">
        <?php //include "sections/logout.php"; ?>
      </div>
        <!-- ---------------Logout section--------------- -->
        
        <div class="right_sctn" id="right_sctn">
          <h3 class="admin_notice_info_ttl">Job Application Tips</h3>
          <div class="admin_notice_info">
            <div class="admin_msg_sctn" style="display: block; padding: 2% 1%"><br>
              1. <span class="special-list" style="font-weight: bold;">How to Ask for a Job Application</span> <br>
                Depending on the type of job you're applying for, stopping by an organization to apply in person can be an excellent way to make a positive impression and to secure a job, provided you go about it the right way.  <br>
            </div>
            <div class="admin_msg_sctn" style="display: block; padding: 2% 1%"><br>
              2. <span class="special-list" style="font-weight: bold;">What Employers Mean by Equivalent Experience</span><br>
                When an employer mentions “equivalent experience” in a job posting, it can either mean experience in place of some educational requirements or non-paid experience. It can include work as an intern or volunteer, in place of paid work experience. <br>
            </div>
            <div class="admin_msg_sctn" style="display: block; padding: 2% 1%"><br>
              3. <span class="special-list" style="font-weight: bold;">How to Provide References With a Job Application</span><br>
                Typically, if you're asked for references, it's a good sign for your job search. That's because, in many cases, employers only request references from applicants once they are considered serious contenders for the role at hand. <br>
            </div>
            <div class="admin_msg_sctn" style="display: block; padding: 2% 1%"><br>
              4. <span class="special-list" style="font-weight: bold;">Job Application Mistakes to Avoid</span><br>
                Most of the time, the job application process is pretty straightforward. Even so, there are job application mistakes that can cost you the opportunity to advance in the hiring process. Competition for jobs is keen, so you need to make sure your employment applications, both paper and online, are as polished as possible.<br>
            </div>
          </div>
        </div>
      </div>
		</div>
    <script>
        function toggle_home_sctn(){
          document.getElementById("home_sctn").style.display = "block";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_new_jobs_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "block";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_applied_jobs_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "block";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_posted_jobs_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "block";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_reg_users_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "block";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_applications_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "block";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_register_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "block";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_login_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "block";
          document.getElementById("logout_sctn").style.display = "none";
        }
        function toggle_logout_sctn(){
          document.getElementById("home_sctn").style.display = "none";
          document.getElementById("new_jobs_sctn").style.display = "none";
          document.getElementById("applied_jobs_sctn").style.display = "none";
          document.getElementById("posted_jobs_sctn").style.display = "none";
          document.getElementById("reg_users_sctn").style.display = "none";
          document.getElementById("applications_sctn").style.display = "none";
          document.getElementById("register_sctn").style.display = "none";
          document.getElementById("login_sctn").style.display = "none";
          document.getElementById("logout_sctn").style.display = "block";
        }
    </script>
    <?php
          // include "main/footer.php";
        include "includes/footer.php";
          // extends footer handler file
     ?>
