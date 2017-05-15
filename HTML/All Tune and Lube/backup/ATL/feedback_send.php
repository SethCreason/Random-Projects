<?php
  $name = $_REQUEST['Customer_Name'] ;
  $phone = $_REQUEST['Customer_Phone'] ;
  $email = $_REQUEST['Customer_Email'] ;
  $friendliness = $_REQUEST['Friendliness'] ;
  $cleanliness = $_REQUEST['Cleanliness'] ;
  $price = $_REQUEST['Prices'] ;
  $website = $_REQUEST['Website'] ;
  $overall = $_REQUEST['Overall'] ;  
  $comments = $_REQUEST['Comments'] ;
  
  mail( "info@ATLofSouthernAZ.com", "Feedback Results From $name", 
         "Feedback From: \r\n$name \r\n$phone\r\n$email \r\n\r\nFriendliness: $friendliness \r\nCleanliness: $cleanliness \r\nPrices: $price \r\nWebsite: $website \r\nOverall: $overall \r\nComments:\r\n$comments", "" );
  header( "Location: http://atlofsouthernaz.com/ATL/feedback_ty.php" );
?>