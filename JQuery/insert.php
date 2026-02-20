<?php
include ('aconnection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
    $app_name=$_POST['app_name'];
    $app_no=$_POST['app_no'];
    $app_email=$_POST['app_email'];
    $app_addr=$_POST['app_addr'];
    $app_college=$_POST['app_college'];
    $app_percent=$_POST['app_percent'];
    $app_post=$_POST['app_post'];
    $app_company=$_POST['app_company'];
    $app_experience=$_POST['app_experience'];
    $app_postn=$_POST['app_postn'];
    $nameformat="/^[A-Za-z ]+$/";
    $numberformat="/^[6-9][0-9]{9}$/";
    if(!preg_match($nameformat,$app_name))
    {
        echo"Name Should be in proper format";
        exit; 
    }
    if(!preg_match($numberformat,$app_no))
    {
        echo"Number Should be in proper format";
        exit;
    }
    $q="INSERT INTO job_applicant(app_name,app_no,app_email,app_addr,app_college,app_percent,app_post,app_company,app_experience,app_postn) 
         VALUES('$app_name','$app_no','$app_email','$app_addr','$app_college','$app_percent','$app_post','$app_company','$app_experience','$app_postn')";
    if ($con->query($q) === TRUE) {
        
        $con->close();
        
        echo"Form Recorded Successfully!!";
    }else {
        
        echo "ERROR:  Faild !!!!!!" . $con->error;  $con->close();
    }
    
   
}
 
