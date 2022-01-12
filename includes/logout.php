<?php
         //user LOGOUT file
    session_start();
      //session validator
    session_destroy();
	     //destroys the running session
		 //thus logs out the user
    header("Location: ../index.php");
	      //returns the browser to the home page
?>
