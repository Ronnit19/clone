<html>
<title>Application for Job</title>
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
<input type="text" name="app_name" placeholder="Enter Your Name">
<input type="text" name="app_no" placeholder="Enter Your Mobile Number">
<input type="email" name="app_email" placeholder="Enter Your E-mail">
<input type="text" name="app_addr" placeholder="Enter Your Current Address">

</div>
<div class= "col-lg-4">
<h3>Qualification Details</h3>
<input type="text" name="app_college" placeholder="Name Of Institute">
<input type="text" name="app_percent" placeholder="Your Aggregate">
<select id="Role" class="post" name="app_post">
<option>--Post Required--</option>
<option>Employee</option>
<option>Manager</option>
<option>HR</option>
<option>Marketing/Sales</option>
<option>Technical</option></select>
</div>
<div class="col-lg-4">
<h3>Experience Details</h3>
<input type="text" name="app_company" placeholder="Name of Company Your Are Working In">
<input type="text" name="app_experience" placeholder="Duration Worked eg.2 years or 2 months">
<input type="text" name="app_postn" placeholder="Worked as eg.HR">
</div>
<button type="submit" class="default-btn" name="submit">Apply Now</button>
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
<script>
$("#Applicant").submit(function(e){
  e.preventDefault();
  
 let app_name = $("input[name='app_name']").val();
 let app_no=$("input[name='app_no']").val();
 let app_email=$("input[name='app_email']").val();
 let app_addr=$("input[name='app_addr']").val();
 let app_college=$("input[name='app_college']").val();
 let app_percent=$("input[name='app_percent']").val();
 let app_post=$("#Role").val();
 let app_company=$("input[name='app_company']").val();
 let app_experience=$("input[name='app_experience']").val();
 let app_postn=$("input[name='app_postn']").val();
 
 let nameformat = /^[A-Za-z ]+$/;
  let numberformat = /^[6-9][0-9]{9}$/;
  
  /*if(!nameformat.test(app_name))
  {
    alert("Name Should be in proper format");
    return;
  }
  if(!numberformat.test(app_no))
  {
  alert("Contact number should be in proper Format");
  return;
  }*/

  $.ajax({
  
  url:"insert.php",
  type:"POST",
  data:{
  app_name:app_name,
  app_no:app_no,
  app_email:app_email,
  app_addr:app_addr,
  app_college:app_college,
  app_percent:app_percent,
  app_post:app_post,
  app_company:app_company,
  app_experience:app_experience,
  app_postn:app_postn
  },
   success: function(res){
        alert(res);
        $("#Applicant")[0].reset();
      } 
  });
  });
 
</script>
