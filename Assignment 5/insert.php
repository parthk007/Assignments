<?php

   $con= mysqli_connect('127.0.0.1','root','','form') or die(mysqli_error($con));
   /*if(!$con)
      echo "Not Connected To Server";

   if(!mysqli_select_db($con,'form'))
      echo "Database Not Selected";*/
   
   $myType=$_POST['myType'];
   $myFirstName=$_POST['myFirstName'];
   $myLastName=$_POST['myLastName'];
   $myPhone=$_POST['myPhone'];
   $myEmail=$_POST['myEmail'];
   $myCollegeName=$_POST['myCollegeName'];
   $myBranch=$_POST['myBranch'];
   $mySem=$_POST['mySem'];
   $myCompanyName=$_POST['myCompanyName'];
   $myCity=$_POST['myCity'];
   $myState=$_POST['myState'];
   $myCountry=$_POST['myCountry'];

   $sql="INSERT INTO formtable(myType,myFirstName,myLastName,myPhone,myEmail,myCollegeName,myBranch,mySem,myCompanyName,myCity,myState,myCountry) VALUES 
         ('$myType','$myFirstName','$myLastName','$myPhone','$myEmail','$myCollegeName','$myBranch','$mySem','$myCompanyName',
         '$myCity','$myState','$myCountry')";
   
   /*if(!mysqli_query($con,$sql))
      echo "Not Inserted";
   else
      echo "Data Inserted";*/
   $result=mysqli_query($con,$sql) or die(mysqli_error($con));

   header("refresh:2; url=form.php");

?>