<?php 
include('aconnection.php');
?>
<html>

<body>
<?php 
if(isset($_GET['msg']) && $_GET['msg']== 'Updated Successfully')
{
    echo"Updated Successfully";
}
if(isset($_GET['msg']) && $_GET['msg']== 'deleted Successfully')
{
    echo"deleted Successfully";
}?>
<table class="col-lg-12">
<thead>
<tr>
<th>App_name</th>
<th>App_no</th>
<th>App_addr</th>
<th>App_email</th>
<th>App_college</th>
<th>App_percent</th>
<th>App_post</th>
<th>App_company</th>
<th>App_experience</th>
<th>App_postn</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
                <?php
               $q="SELECT * FROM job_applicant";
                
           $query=mysqli_query($conn,$q);
            while($resd=mysqli_fetch_array($query)){
                $status=$resd['app_status'];
            
   ?> 

<tr>

<td ><?php echo $resd['app_name']; ?></td>

              <td ><?php
              echo  $resd['app_no'];             
             ?></td>
              <td ><?php echo $resd['app_addr']; ?></td>
                  <td ><?php echo $resd['app_email']; ?></td> 
                    <td ><?php echo $resd['app_college']?></td>   
       <td ><?php echo $resd['app_percent']; ?></td>
      <td ><?php echo $resd['app_post']; ?></td>
       <td ><?php echo $resd['app_company']; ?>
       
       </td>  
        <td ><?php echo $resd['app_experience']; ?></td> 
           <td >  <?php echo $resd['app_postn']; ?></td> 
           <td><a href="edit_app.php?id=<?php echo $resd['app_id']; ?>">
    <button>Edit</button>
</a>
           </td>
            <td><a href="delete_app.php?did=<?php echo $resd['app_id']; ?>">
    <button>Delete</button>
</a>
           </td>
       
</tr>
<?php  }     ?>  
</tbody>
</table>
</body>
</html>

