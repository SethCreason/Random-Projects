<?php
  $Customer_Name = $_REQUEST['Customer_Name'] ;
  $Customer_Phone = $_REQUEST['Customer_Phone'] ;
  $Customer_Cell = $_REQUEST['Customer_Cell'] ;
  $Customer_Email = $_REQUEST['Customer_Email'] ;
  $Vehicle_Year = $_REQUEST['Vehicle_Year'] ;
  $Vehicle_Make = $_REQUEST['Vehicle_Make'] ;
  $Vehicle_Model = $_REQUEST['Vehicle_Model'] ;
  $Vehicle_Engine = $_REQUEST['Vehicle_Engine'] ;
  $Vehicle_License = $_REQUEST['Vehicle_License'] ;
  $Can_Leave_Vehicle = $_REQUEST['Can_Leave_Vehicle'] ;
  $Needs_Tow = $_REQUEST['Needs_Tow'] ;
  $Needs_Ride = $_REQUEST['Needs_Ride'] ;
  $date1 = $_REQUEST['date1'] ;
  $date2 = $_REQUEST['date2'] ;
  $date3 = $_REQUEST['date3'] ;
  $time1 = $_REQUEST['time1'] ;
  $time2 = $_REQUEST['time2'] ;
  $time3 = $_REQUEST['time3'] ;
  $Reason = $_REQUEST['Reason'] ;

  mail( "datsondarealb@yahoo.com", "Appointment Request From $Customer_Name", 
         "Customer Info: \r\n\r\nCustomer Name: $Customer_Name \r\nCustomer Phone: $Customer_Phone \r\nCustomer Cell: $Customer_Cell \r\nCustomer Email: $Customer_Email \r\n\r\nVehicle Info: \r\n\r\nYear: $Vehicle_Year \r\nMake: $Vehicle_Make \r\nModel: $Vehicle_Model \r\nEngine: $Vehicle_Engine \r\nLicense Plate: $Vehicle_License \r\n\r\nCan you leave the vehicle with us for the day:  $Can_Leave_Vehicle \r\nNeed vehicle towed: $Needs_Tow \r\nNeed a ride home/work:  $Needs_Ride \r\nWhen would you like to bring the vehicle in:  \r\n$date1 @ $time1, $date2 @ $time2, $date3 @ $time3 \r\n\r\nReason For Appointment: $Reason", "" );
  header( "Location: http://atlofsouthernaz.com/appointment_req_ty.php" );
?>