
 <header>
    <link href="includes/admin/tables_handler/external/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/external/google-code-prettify/prettify.js"></script>
    <link href="includes/admin/tables_handler/index.css" rel="stylesheet">
    <link href="includes/admin/tables_handler/sar_handler.css" rel="stylesheet">
    <script src="includes/admin/tables_handler/mindmup-editabletable.js"></script>
    <script src="includes/admin/tables_handler/numeric-input-example.js"></script>
   <style type="text/css">

      ul li.stats_active a.nav-link{
        background-color: #790000 !important;
      }
        ul li.subjects_active label.nav-link{
          background-color: #113448;
        }
        table{
          background-color: #dddddd;
        }
        tr.tbl_header{
          padding: 2% 3%;
          color: #222;
          background-color: darkgrey;
        }
        td.msg_field{
          width: 45%;
          background: #f2f2f2;
          cursor: grabbing;
        }
        td.id_lbl{
          background: lightgrey;
        }
   </style>
   <link rel="stylesheet" href="static/css/sections.css">
      <!-- link to pg stylesheet -->
   </header>
   <div class="left_sctn">
         <div class="slide_sctn">
             <h3 id="left-section-ttl">Section <span class="special_seperator">|</span><span class="active_link"> Registered Users</span></h3>
         </div>
        <div class="job_info_sctn">
          <table  style="width:100%">
             <?php
                 echo "<tr class='tbl_header'>";
                   echo "<th class='id_ttl_sctn'>ID</th>";
                   echo "<th class='fname_ttl_sctn'>First Name</th>";
                   echo "<th class='lname_ttl_sctn'>Last Name</th>";
                   echo "<th class='mail_ttl_sctn'>Email</th>";
                   // echo "<th class='u_code_ttl_sctn'>Volume(Ltrs)</th>";
                 echo "</tr>";
                  $query = "SELECT * FROM clients";
                  $result = mysqli_query($connect, $query);
                  $result_option = mysqli_query($connect, $query);
                      //queries db
                  while ($row1 = mysqli_fetch_array($result_option)):;
                     echo "<tr>";
                     echo "<td class='process_lbl id_lbl'>".$row1[0]."</td>";
                     echo "<td class='process_lbl'>".$row1[1]."</td>";
                     echo "<td class='process_lbl'>".$row1[2]."</td>";
                     echo "<td class='process_lbl'>".$row1[4]."</td>";
                     // echo "<td class='process_lbl'>".$row1[4]."</td>";
                     echo "</tr>";
                  endwhile;
              ?>
           </table>
           <br><br>
        </div>
      </div>
