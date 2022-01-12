<header>
  <style type="text/css">
    ul li.index_active label.nav-link,
    ul li.post_job_active label.nav-link,
    ul li.new_jobs_active label.nav-link,
    ul li.login_active label.nav-link,
    ul li.registration_active label.nav-link{
      background-color: #113448;
    }
    ul li.transcripts_active label.nav-link{
      background-color: #113448;
    }
    .tbl_display table{
      overflow-x: scroll;
    }
    td{
      padding: 2%;
    }
    th.unit_score{
      width: 30%;
    }
    th.id_ttl_sctn{
      width: 20%;
    }
    th.u_code_ttl_sctn{
      width: 30%;
    }
    input.unit_score{
      width: 100%;
      padding: 1% 2%;
    }
  </style>
  <link href="includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
  <script src="includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
  <link href="includes/admin/tables_handler/index.css" rel="stylesheet">
  <link href="includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
  <script src="includes/admin/tables_handler/mindmup-editabletable.js"></script>
  <script src="includes/admin/tables_handler/numeric-input-example.js"></script>
  <link rel="stylesheet" href="static/css/sections.css">
     <!-- link to pg stylesheet -->
</header>
<div class="left_sctn">
  <div class="slide_sctn">
      <h3 id="left-section-ttl">Section <span class="special_seperator">|</span><span class="active_link"> Applied Jobs</span></h3>
  </div>
  <div class="info_sctn">
  </div><br>
  <p>
  Jobs applied through <b>Kazisasa.com</b> </p>
  <br>
 <div class="job_info_sctn">
   <div class="job_notice_info">
     <div class='job_msg_sctn' style='display: block; padding: 2% 1%'>
       <?php
         $client_usrname = $_SESSION['user']['username'];
         $query = "SELECT * FROM applied_jobs WHERE applicant_username = '$client_usrname'";
         $result = mysqli_query($connect, $query);
         $result_option = mysqli_query($connect, $query);
             //fetch records from db
        if (mysqli_num_rows($result) == 0) {
          echo "No saved job application records!<br>";
           echo "<label class='new-link'>Go to <b onclick='toggle_new_jobs_sctn();' style='text-decoration: underline; cursor: pointer; color: maroon;'>New Jobs</b> and apply.</label>";
        }
              // check if there are records
         if (mysqli_num_rows($result) > 0) {
              $count = 1;
              while ($row1 = mysqli_fetch_array($result_option)):;
                $_id_ = $row1[0];
                $_cmpny_name_ = $row1[3];
                $_cmpny_intro_info_ = $row1[8];
                $_job_ttl_ = $row1[9];
                $_advrt_period_ = $row1[10];
                $_job_dscrptn_ = $row1[11];
                $_job_rqrmnts_ = $row1[12];
                $_job_id_ = $row1[13];
                $_date_pstd_ = $row1[14];
                echo "<form action='index.php' method='POST' role='form' class='php-email-form  validate-form'>";
                echo "<h2 class='job_sctn_ttl'>".$count."&nbsp;".$_cmpny_name_."</h2>";
                echo "<div class='cmpny_intro_info' style='border-top: 1px solid #ddd; background-color: #f9f9f9; padding: 14px 0px 14px 8px;'>";
                echo "<p>";
                echo "<h3 class='job_sctn_sub_ttl'>Company info: </h3>";
                echo "".$_cmpny_intro_info_.".<br>";
                echo "</p>";
                echo "</div>";
                echo "<div class='job_info' style='border-top: 1px solid #ddd; background-color: #f9f9f9; padding: 14px 0px 14px 8px;'>";
                echo "<h3 class='job_sctn_sub_ttl'>Job Title: </h3>";
                echo "<h3 class='job_ttl'>".$_job_ttl_."</h3><br>";
                echo "<h3 class='job_sctn_sub_ttl'>Job advert duration period: </h3>";
                echo "<h4 class='job_advert_spcfcs'>";
                echo "<span>Date applied:&nbsp;".$_date_pstd_."</span><br>";
                echo "<span>Days remaining:&nbsp;".$_advrt_period_."</span><br>";
                echo "<span>Job ID:&nbsp;".$_job_id_."</span><br>";
                echo "</h4>";
                echo "<div class='job_dscrptn' style='border-top: 1px solid #ddd; background-color: #f9f9f9; padding: 14px 0px 14px 8px;'>";
                echo "<h3 class='job_sctn_sub_ttl'>Job Description:</h3>";
                echo "<p>";
                echo "".$_job_dscrptn_.".<br>";
                echo "</p>";
                echo "</div>";
                echo "<div class='job_rqrmnt' style='border-top: 1px solid #ddd; background-color: #f9f9f9; padding: 14px 0px 14px 8px;'>";
                echo "<h3 class='job_sctn_sub_ttl'>Job Requirements:</h3>";
                echo "<p>";
                echo "".$_job_rqrmnts_.".<br>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
                echo "<div class='sections-seperator'>";
                echo "<hr>";
                echo "<span class='dot'></span>";
                echo "<span class='dot'></span>";
                echo "<span class='dot'></span>";
                echo "</div><br>";
                echo "</form>";
                $count++;
              endwhile;
           }//fetch info from client's applied jobs db table
       ?>
     </div>
   </div>
 </div>

</div> <br>
