<?php

//assigning value of users data from form
   $stu_id = $_POST['id'];
   $stu_name = $_POST['sname'];
   $stu_address = $_POST['saddress'];
   $stu_class = $_POST['selected'];
   $stu_phone = $_POST['sphone'];

   //creating connection
   $conn = new mysqli("localhost","root", "password","crud");

   //incase connection failed show message and exit from php script
   if($conn->connect_error){
     die("Connection failed: ".$conn->connect_error());
 }
 
 
   //2nd step run sql query
   //inserting data from table to database 
   $sql = "UPDATE students
           SET name='{$stu_name}', address='{$stu_address}', class='{$stu_class}',phone='{$stu_phone}'
           WHERE id='{$stu_id}'; ";//inserting data of those user that have id as saved

   $result = $conn->query($sql);
 
//after saving user data to database redirecting user to add page
header("location: http://localhost/php_crud/index.php");

 
   //3rd step closing connection
   $conn->close();


   ?>

