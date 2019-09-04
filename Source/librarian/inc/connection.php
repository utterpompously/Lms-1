<?php 
	 $link= mysqli_connect("localhost","root","");
     mysqli_select_db($link, "lms");
     if(! $link ){
        die('Could not connect: ' . mysqli_error());
     }
 ?>


