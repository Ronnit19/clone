<?php 
include('aconnection.php');

if(isset($_GET['did']))
{
    $id = $_GET['did'];
$q = "DELETE FROM job_applicant WHERE app_id='$id'";
$query = mysqli_query($conn, $q);
if ($query) {
    header("Location: dashboard.php?msg=deleted Successfully");
    
    exit();
} else {
    echo "Update Error: " . mysqli_error($conn);
}
}?>
