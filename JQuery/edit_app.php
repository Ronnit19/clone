<?php
include('aconnection.php');

$id = $_GET['id'];

$q = "SELECT * FROM job_applicant WHERE app_id='$id'";
$query = mysqli_query($conn, $q);
$resd = mysqli_fetch_assoc($query);
?>
<html>
<title>Application Update for Job</title>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
<form method="post" id="Applicant">
<div class="row">
<div class= "col-lg-4">
<h3>Personal Info</h3>
<input type="text" name="app_name" value="<?php echo $resd['app_name']; ?>">
<input type="text" name="app_no" value="<?php echo $resd['app_no']; ?>">
<input type="email" name="app_email" value="<?php echo $resd['app_email']; ?>">
<input type="text" name="app_addr" value="<?php echo $resd['app_addr']; ?>">

</div>
<div class= "col-lg-4">
<h3>Qualification Details</h3>
<input type="text" name="app_college" value="<?php echo $resd['app_college']; ?>">
<input type="text" name="app_percent" value="<?php echo $resd['app_percent']; ?>">
<select id="Role" class="post" name="app_post" >
<option><?php echo $resd['app_post']; ?></option>
<option>--Post Required--</option>
<option>Employee</option>
<option>Manager</option>
<option>HR</option>
<option>Marketing/Sales</option>
<option>Technical</option></select>
</div>
<div class="col-lg-4">
<h3>Experience Details</h3>
<input type="text" name="app_company" value="<?php echo $resd['app_company']; ?>">
<input type="text" name="app_experience" value="<?php echo $resd['app_experience']; ?>">
<input type="text" name="app_postn" value="<?php echo $resd['app_postn']; ?>">
</div>
<button type="submit" class="default-btn" name="update">Update</button>
</div>
</form>
</div>
</body>
</html>
<style>input{
width:100%;
height:30%;
margin-bottom:20px;
}
.post{
width:100%;
height:30%;
}
.default-btn{
margin-top:180px;
}
</style>
<?php
if (isset($_POST['update'])) {
    
    $name = $_POST['app_name'];
    $no = $_POST['app_no'];
    $email = $_POST['app_email'];
    $addr = $_POST['app_addr'];
    $college = $_POST['app_college'];
    $percent = $_POST['app_percent'];
    $app_post = $_POST['app_post'];
    $app_company = $_POST['app_company'];
    $app_experience = $_POST['app_experience'];
    $app_postn = $_POST['app_postn'];

    $uq = "UPDATE job_applicant SET
            app_name='$name',
            app_no='$no',
            app_email='$email',
            app_addr='$addr',
            app_college='$college',
            app_percent='$percent',
            app_post='$app_post',
            app_company='$app_company',
            app_experience='$app_experience',
            app_postn='$app_postn'
           WHERE app_id='$id'";

    if (mysqli_query($conn, $uq)) {
        header("Location: dashboard.php?msg=Updated Successfully");
       
        exit();
    } else {
        echo "Update Error: " . mysqli_error($conn);
    }
}
?>
