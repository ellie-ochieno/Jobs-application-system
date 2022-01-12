
 <header>
    <link href="includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
    <link href="includes/admin/tables_handler/index.css" rel="stylesheet">
    <link href="includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/mindmup-editabletable.js"></script>
    <script src="includes/admin/tables_handler/numeric-input-example.js"></script>
   <style type="text/css">
     ul li.index_active label.nav-link,
     ul li.applied_jobs_active label.nav-link,
     ul li.post_job_active label.nav-link,
     ul li.login_active label.nav-link,
     ul li.registration_active label.nav-link{
       background-color: #113448;
     }
     ul li.new_jobs_active label.nav-link{
       background-color: #113448;
     }
       ul li.control_active a.nav-link{
         background-color: #790000 !important;
     }
     #applctn_dtls0,#applctn_dtls1,#applctn_dtls2,#applctn_dtls3,#applctn_dtls4,#applctn_dtls5,#applctn_dtls6,#applctn_dtls7,#applctn_dtls8,#applctn_dtls9,#applctn_dtls10,
     #applctn_dtls11,#applctn_dtls12,#applctn_dtls13,#applctn_dtls14,#applctn_dtls15,#applctn_dtls16,#applctn_dtls17,#applctn_dtls18,#applctn_dtls19,#applctn_dtls20,
     #applctn_dtls21,#applctn_dtls22,#applctn_dtls23,#applctn_dtls24,#applctn_dtls25,#applctn_dtls26,#applctn_dtls27,#applctn_dtls28,#applctn_dtls29,#applctn_dtls30{
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
     textarea.cover_lttr_sctn{
       width: 100%;
       height: 260px;
       padding: 1% 2%;
       background-color: #f2f2f2;
     }
     input{
       width: 60%;
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
     textarea.cover_lttr_sctn{
       height: 300px;
     }
    }
   @media (max-width: 576px) {
     .info_sctn{
       margin-left: .1%;
       /* text-align: center; */
      }
    textarea.cover_lttr_sctn{
      height: 300px;
    }
     }
   </style>
   <link rel="stylesheet" href="static/css/sections.css">
      <!-- link to pg stylesheet -->
   </header>
   <div class="left_sctn">
         <div class="slide_sctn">
             <h3 id="left-section-ttl">Section <span class="special_seperator">|</span><span class="active_link"> New Jobs</span></h3>
         </div>
        <div class="job_info_sctn">
          <div class="job_notice_info">
            <div class='job_msg_sctn' style='display: block; padding: 2% 1%'>
              <?php
                $query = "SELECT * FROM new_job_post";
                $result = mysqli_query($connect, $query);
                $result_option = mysqli_query($connect, $query);
                    //fetch records from db
               if (mysqli_num_rows($result) == 0) {
                  echo "There is no new jobs posted yet!";
               }
                     // check if there are records
                $count = 0;
                if (mysqli_num_rows($result) > 0) {
                     while ($row1 = mysqli_fetch_array($result_option)):;
                       $btnId = "jobId".$count."submitBtn";
                       $_cmpny_name_ = $row1[1];
                       $_cmpny_intro_info_ = $row1[2];
                       $_job_ttl_ = $row1[3];
                       $_advrt_period_ = $row1[4];
                       $_job_dscrptn_ = $row1[5];
                       $_job_rqrmnts_ = $row1[6];
                       $_job_id_ = $row1[7];
                       $_date_pstd_ = $row1[8];
                       echo "<form action='index.php' method='POST' role='form' class='php-email-form  validate-form'>";
                       echo "<h2 class='job_sctn_ttl'>".$_cmpny_name_."</h2>";
                       echo "<div class='cmpny_intro_info'>";
                       echo "<p>";
                       echo "".$_cmpny_intro_info_.".<br>";
                       echo "</p>";
                       echo "</div>";
                       echo "<div class='job_info'>";
                       echo "<h3 class='job_ttl'>".$_job_ttl_."</h3>";
                       echo "<h4 class='job_advert_spcfcs'>";
                       echo "<span>Date posted:&nbsp;".$_date_pstd_."</span><br>";
                       echo "<span>Days remaining:&nbsp;".$_advrt_period_."</span><br>";
                       echo "<span>Job ID:&nbsp;".$_job_id_."</span><br>";
                       echo "<input type='text' name='job_id' style='display:none;' value='".$_job_id_."'>";
                       echo "</h4>";
                       echo "<div class='job_dscrptn'>";
                       echo "<h3 class='job_sctn_sub_ttl'>Job Description:</h3>";
                       echo "<p>";
                       echo "".$_job_dscrptn_.".<br>";
                       echo "</p>";
                       echo "</div>";
                       echo "<div class='job_rqrmnt'>";
                       echo "<h3 class='job_sctn_sub_ttl'>Job Requirements:</h3>";
                       echo "<p>";
                       echo "".$_job_rqrmnts_.".<br>";
                       echo "</p>";
                       echo "</div>";
                       echo "<div class='job_applctn'>";
                       if (isset($_SESSION['user'])) {
                         if($count == ($count+0))
                         {
                            echo "<button class='btn' type='button' name='job_applctn_sctn".$count."_display_btn' onclick='toggle_applctnJob".$count."_dtls_sctn();'>Apply</button>";
                         }
                       }
                       if (!isset($_SESSION['user'])) {
                         echo "<button class='btn' type='button' onclick='login_notice();' name='job_applctn_btn' title='Login required' style='opacity: .4;'>Apply</button>";
                       }
                       // echo "<button class='btn' type='submit' onclick='job_applctn_notification();' name='job_applctn_btn'>Apply</button>";
                       echo "</div>";
                       echo" <div class='applctn_dtls' id='applctn_dtls".$count."'><br>";
                          echo "<div class='sections-seperator'>";
                            echo "<hr>";
                            echo "<span class='dot'></span>";
                            echo "<span class='dot'></span>";
                            echo "<span class='dot'></span>";
                          echo "</div><br>";
                          echo "<h3 class='job_sctn_sub_ttl'>Application Details</h3><br>";
                          echo" <div class='form-group validate-input' data-validate = 'Education level required'>";
                            echo" <label class='label_info'>Education Level</label>";
                            echo" <input type='text' name='education_level' class='form-control' id='education_level' placeholder='Education level' required/>";
                            echo" <div class='validate'></div>";
                          echo" </div><br>";
                          echo" <div class='form-group validate-input' data-validate = 'Nationality required'>";
                            echo" <label class='label_info'>Nationality</label>";
                            echo" <input type='text' name='nationality' class='form-control' id='nationality' placeholder='Nationality' required/>";
                            echo" <div class='validate'></div>";
                          echo" </div><br>";
                          echo" <div class='form-group validate-input' data-validate = 'Area of stay required'>";
                            echo" <label class='label_info'>Area/Town of stay</label>";
                            echo" <input type='text' name='area_of_stay' class='form-control' id='area_of_stay' placeholder='Area of stay' required/>";
                            echo" <div class='validate'></div>";
                          echo" </div><br>";
                          echo"<div class='form-group validate-input' data-validate = 'Cover letter required'>";
                           echo" <label class='label_info'>Cover Letter</label><br>";
                            echo"<textarea type='text' name='cover_lttr' class='form-control cover_lttr' rows='4' cols='70' placeholder='Cover letter...' required>";
                            echo"</textarea>";
                           echo"<div class='validate'></div>";
                          echo"</div><br>";
                          echo "<div class='job_applctn'>";
                            echo "<button class='btn' type='submit' style='margin-right: 4px;' name='job_applctn_btn'>Submit</button>";
                            if($count == ($count+0))
                             {
                                echo "<button class='btn' type='button' name='job_applctn_sctn_hide_btn' onclick='toggleOFF_job".$count."Applctn_sctn();'>Hide</button>";
                             }
                          echo "</div>";
                       echo" </div>";
                       echo "</div>";
                       echo "<div class='sections-seperator'>";
                       echo "<hr>";
                       echo "<span class='dot'></span>";
                       echo "<span class='dot'></span>";
                       echo "<span class='dot'></span>";
                       echo "</div><br>";
                       echo "<div id='loader-section'>";
                       echo "<div class='loader'>";
                       echo "</div>";
                       echo "</div>";
                       echo "</form>";
                       $count ++;
                     endwhile;
                  }//fetch info from new jobs db table
              ?>

            </div>
          </div>
        </div>
      </div>
      <script>
      //notification fn
      function job_applctn_notification(){
        setTimeout(function(){ alert("\n\tYour job application sent successively!"); }, 10);
      }

      function login_notice(){
        setTimeout(function(){ alert("\n\tButton disabled, login required!"); }, 10);
      }
      function toggle_applctnJob0_dtls_sctn(){
        document.getElementById("applctn_dtls0").style.display = "block";
      }
      function toggleOFF_job0Applctn_sctn(){
        document.getElementById("applctn_dtls0").style.display = "none";
      }

      function toggle_applctnJob1_dtls_sctn(){
        document.getElementById("applctn_dtls1").style.display = "block";
      }
      function toggleOFF_job1Applctn_sctn(){
        document.getElementById("applctn_dtls1").style.display = "none";
      }

      function toggle_applctnJob2_dtls_sctn(){
        document.getElementById("applctn_dtls2").style.display = "block";
      }
      function toggleOFF_job2Applctn_sctn(){
        document.getElementById("applctn_dtls2").style.display = "none";
      }

      function toggle_applctnJob3_dtls_sctn(){
        document.getElementById("applctn_dtls3").style.display = "block";
      }
      function toggleOFF_job3Applctn_sctn(){
        document.getElementById("applctn_dtls3").style.display = "none";
      }

      function toggle_applctnJob4_dtls_sctn(){
        document.getElementById("applctn_dtls4").style.display = "block";
      }
      function toggleOFF_job4Applctn_sctn(){
        document.getElementById("applctn_dtls4").style.display = "none";
      }

      function toggle_applctnJob5_dtls_sctn(){
        document.getElementById("applctn_dtls5").style.display = "block";
      }
      function toggleOFF_job5Applctn_sctn(){
        document.getElementById("applctn_dtls5").style.display = "none";
      }

      function toggle_applctnJob6_dtls_sctn(){
        document.getElementById("applctn_dtls6").style.display = "block";
      }
      function toggleOFF_job6Applctn_sctn(){
        document.getElementById("applctn_dtls6").style.display = "none";
      }

      function toggle_applctnJob7_dtls_sctn(){
        document.getElementById("applctn_dtls7").style.display = "block";
      }
      function toggleOFF_job7Applctn_sctn(){
        document.getElementById("applctn_dtls7").style.display = "none";
      }

      function toggle_applctnJob8_dtls_sctn(){
        document.getElementById("applctn_dtls8").style.display = "block";
      }
      function toggleOFF_job8Applctn_sctn(){
        document.getElementById("applctn_dtls8").style.display = "none";
      }

      function toggle_applctnJob9_dtls_sctn(){
        document.getElementById("applctn_dtls9").style.display = "block";
      }
      function toggleOFF_job9Applctn_sctn(){
        document.getElementById("applctn_dtls9").style.display = "none";
      }

      function toggle_applctnJob10_dtls_sctn(){
        document.getElementById("applctn_dtls10").style.display = "block";
      }
      function toggleOFF_job10Applctn_sctn(){
        document.getElementById("applctn_dtls10").style.display = "none";
      }



      function toggle_applctnJob11_dtls_sctn(){
        document.getElementById("applctn_dtls11").style.display = "block";
      }
      function toggleOFF_job11Applctn_sctn(){
        document.getElementById("applctn_dtls11").style.display = "none";
      }

      function toggle_applctnJob12_dtls_sctn(){
        document.getElementById("applctn_dtls12").style.display = "block";
      }
      function toggleOFF_job12Applctn_sctn(){
        document.getElementById("applctn_dtls12").style.display = "none";
      }

      function toggle_applctnJob13_dtls_sctn(){
        document.getElementById("applctn_dtls13").style.display = "block";
      }
      function toggleOFF_job13Applctn_sctn(){
        document.getElementById("applctn_dtls13").style.display = "none";
      }

      function toggle_applctnJob14_dtls_sctn(){
        document.getElementById("applctn_dtls14").style.display = "block";
      }
      function toggleOFF_job14Applctn_sctn(){
        document.getElementById("applctn_dtls14").style.display = "none";
      }

      function toggle_applctnJob15_dtls_sctn(){
        document.getElementById("applctn_dtls15").style.display = "block";
      }
      function toggleOFF_job15Applctn_sctn(){
        document.getElementById("applctn_dtls15").style.display = "none";
      }

      function toggle_applctnJob16_dtls_sctn(){
        document.getElementById("applctn_dtls16").style.display = "block";
      }
      function toggleOFF_job16Applctn_sctn(){
        document.getElementById("applctn_dtls16").style.display = "none";
      }

      function toggle_applctnJob17_dtls_sctn(){
        document.getElementById("applctn_dtls17").style.display = "block";
      }
      function toggleOFF_job17Applctn_sctn(){
        document.getElementById("applctn_dtls17").style.display = "none";
      }

      function toggle_applctnJob18_dtls_sctn(){
        document.getElementById("applctn_dtls18").style.display = "block";
      }
      function toggleOFF_job18Applctn_sctn(){
        document.getElementById("applctn_dtls18").style.display = "none";
      }

      function toggle_applctnJob19_dtls_sctn(){
        document.getElementById("applctn_dtls19").style.display = "block";
      }
      function toggleOFF_job19Applctn_sctn(){
        document.getElementById("applctn_dtls19").style.display = "none";
      }

      function toggle_applctnJob20_dtls_sctn(){
        document.getElementById("applctn_dtls20").style.display = "block";
      }
      function toggleOFF_job20Applctn_sctn(){
        document.getElementById("applctn_dtls20").style.display = "none";
      }


      function toggle_applctnJob21_dtls_sctn(){
        document.getElementById("applctn_dtls21").style.display = "block";
      }
      function toggleOFF_job21Applctn_sctn(){
        document.getElementById("applctn_dtls21").style.display = "none";
      }

      function toggle_applctnJob22_dtls_sctn(){
        document.getElementById("applctn_dtls22").style.display = "block";
      }
      function toggleOFF_job22Applctn_sctn(){
        document.getElementById("applctn_dtls22").style.display = "none";
      }

      function toggle_applctnJob23_dtls_sctn(){
        document.getElementById("applctn_dtls23").style.display = "block";
      }
      function toggleOFF_job23Applctn_sctn(){
        document.getElementById("applctn_dtls23").style.display = "none";
      }

      function toggle_applctnJob24_dtls_sctn(){
        document.getElementById("applctn_dtls24").style.display = "block";
      }
      function toggleOFF_job24Applctn_sctn(){
        document.getElementById("applctn_dtls24").style.display = "none";
      }

      function toggle_applctnJob25_dtls_sctn(){
        document.getElementById("applctn_dtls25").style.display = "block";
      }
      function toggleOFF_job25Applctn_sctn(){
        document.getElementById("applctn_dtls25").style.display = "none";
      }

      function toggle_applctnJob26_dtls_sctn(){
        document.getElementById("applctn_dtls26").style.display = "block";
      }
      function toggleOFF_job26Applctn_sctn(){
        document.getElementById("applctn_dtls26").style.display = "none";
      }

      function toggle_applctnJob27_dtls_sctn(){
        document.getElementById("applctn_dtls27").style.display = "block";
      }
      function toggleOFF_job27Applctn_sctn(){
        document.getElementById("applctn_dtls27").style.display = "none";
      }

      function toggle_applctnJob28_dtls_sctn(){
        document.getElementById("applctn_dtls28").style.display = "block";
      }
      function toggleOFF_job28Applctn_sctn(){
        document.getElementById("applctn_dtls28").style.display = "none";
      }

      function toggle_applctnJob29_dtls_sctn(){
        document.getElementById("applctn_dtls29").style.display = "block";
      }
      function toggleOFF_job29Applctn_sctn(){
        document.getElementById("applctn_dtls29").style.display = "none";
      }

      function toggle_applctnJob30_dtls_sctn(){
        document.getElementById("applctn_dtls30").style.display = "block";
      }
      function toggleOFF_job30Applctn_sctn(){
        document.getElementById("applctn_dtls30").style.display = "none";
      }
      </script>
