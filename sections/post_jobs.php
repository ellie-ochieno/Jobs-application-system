
 <header>
    <link href="includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
    <link href="includes/admin/tables_handler/index.css" rel="stylesheet">
    <link href="includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/mindmup-editabletable.js"></script>
    <script src="includes/admin/tables_handler/numeric-input-example.js"></script>
   <style type="text/css">
     ul li.index_active label.nav-link,
     ul li.new_jobs_active label.nav-link,
     ul li.applied_jobs_active label.nav-link,
     ul li.login_active label.nav-link,
     ul li.registration_active label.nav-link{
       background-color: #113448;
     }
     ul li.post_job_active label.nav-link{
       background-color: #113448;
     }
       ul li.control_active a.nav-link{
         background-color: #790000 !important;
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
     textarea.job_dscrptn, textarea.job_rqrmnts, textarea.cmpny_intro_info{
       width: 100%;
       height: 200px;
       padding: 1% 2%;
       background-color: #f2f2f2;
     }
     p.form_info, label.label_info{
       font-size: 20px;
       color: #555;
     }
     button.job_post_btn, button.job_update_btn{
       width: 20%;
       padding: 1% 2%;
     }
    @media (max-width: 769px) {
    .info_sctn{
        margin-left: 20%;
        /* text-align: center; */
       }
     textarea.job_dscrptn, textarea.job_rqrmnts{
       height: 300px;
     }
    }
   @media (max-width: 576px) {
     .info_sctn{
       margin-left: .1%;
       /* text-align: center; */
      }
    textarea.job_dscrptn, textarea.job_rqrmnts{
      height: 300px;
    }
     }
   </style>
   <link rel="stylesheet" href="static/css/sections.css">
      <!-- link to pg stylesheet -->
      <title>Post Jobs</title>
   </header>
   <div class="left_sctn">
     <div class="slide_sctn">
         <h3 id="left-section-ttl">Section <span class="special_seperator">|</span><span class="active_link"> Post New Job(s)</span></h3>
     </div><br>
     <div class="info_sctn">
     <p class="form_info">Fill the form as guided to create and post a new job</p class="form_info">
       <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
         <form action="index.php" method="POST" role="form" class="php-email-form  validate-form">
           <div class="form-column"><br>
             <div class="form-group validate-input" data-validate = "Username required">
               <label class="label_info">Company Business Name</label>
               <input type="text" name="cmpny_name" class="form-control" id="cmpny_name" data-rule="minlen:4" placeholder="Company business name" required/>
               <div class="validate"></div>
             </div><br>
             <div class="form-group validate-input" data-validate = "Company Business Description">
                <label class="label_info">Company Information</label><br>
                <textarea type="text" name="cmpny_intro_info" class="form-control cmpny_intro_info" rows="4" cols="50" placeholder="Company description" required>
                </textarea>
               <div class="validate"></div>
             </div><br>
             <div class="form-group validate-input" data-validate = "Job title required">
               <label class="label_info">Job Title</label>
               <input type="text" name="job_ttl" class="form-control" id="job_ttl" data-rule="minlen:4" placeholder="Job title" required/>
               <div class="validate"></div>
             </div><br>
             <div class="form-group validate-input" data-validate = "Advert period required">
               <label class="label_info">Advert Length Period(in days)</label>
               <input type="number" step="1" name="advrt_period" class="form-control" id="advrt_period" data-rule="minlen:4" placeholder="Job advertisement length." required/>
               <div class="validate"></div>
             </div><br>
             <div class="form-group validate-input" data-validate = "Job Description required">
                <label class="label_info">Job Description</label><br>
                <textarea type="text" name="job_dscrptn" class="form-control job_dscrptn" rows="4" cols="50" placeholder="Job description" required>
                </textarea>
               <div class="validate"></div>
             </div><br>
             <div class="form-group validate-input" data-validate = "Job Requirements required">
                <label class="label_info">Job Requirements</label><br>
                <textarea type="text" name="job_rqrmnts" class="form-control job_rqrmnts" rows="4" cols="50" placeholder="job requirements" required>
                </textarea>
               <div class="validate"></div>
             </div>
           </div><br>
           <div class="text-center">
             <?php
                 if (isset($_SESSION['user'])) {
                   echo "<button class='btn job_post_btn' onclick='toggle_loader();' type='submit' name='job_post_btn'>&nbsp;Post&nbsp;</button>";
                 }
                 if (!isset($_SESSION['user'])) {
                   echo "<button class='btn job_post_btn' type='button' onclick='login_notice();' name='job_post_btn' title='Login required' style='opacity: .4;'>&nbsp;Post&nbsp;</button>";
                 }
              ?>
             <!-- <button class="btn job_post_btn" onclick="toggle_loader();" type="submit" onclick="" name="job_post_btn">&nbsp;Post&nbsp;</button>
             <button class="btn job_update_btn" onclick="toggle_loader();" type="submit" onclick="" name="job_update_btn">&nbsp;Update&nbsp;</button> -->
           </div>
           <div id="loader-section">
             <div class="loader">
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
   <script>
     function login_notice(){
       setTimeout(function(){ alert("\n\tButton disabled, login required!"); }, 10);
     }//login notification fn
   </script>
