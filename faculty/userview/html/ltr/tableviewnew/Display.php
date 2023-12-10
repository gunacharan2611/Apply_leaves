<!DOCTYPE html>
<html>
<head>
 <title>Forms Submitted</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center"  > Forms Submitted </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th>Form name</th>
       <th>Registration Number</th>
       <th>Name</th>
       <th>email</th>
       <th>mobile</th>
       <th>Reason</th>
       <th>from_date</th>
       <th>to_date</th>
       <th>status</th>
       <th>Department</th>
       

 </tr >

 <?php
session_start();
//echo "".$_SESSION['designation'];
$des=$_SESSION['designation'];
$regnum=$_SESSION['fuid'];
 include 'conn.php'; 
 $q = "select forms_reason.id, forms_reason.form_id,forms_reason.from_date,forms_reason.to_date,forms_reason.reason,forms_reason.fstatus,users.sid,users.names,users.email,users.mobile,
 users.department,forms_data.formname,forms_data.reg_number from ((forms_reason inner join users 
 on forms_reason.sid=users.sid)inner join forms_data on forms_reason.form_id=forms_data.form_id) where forms_data.reg_number=$regnum" ;

 $query = mysqli_query($con,$q);
 
 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['formname'];  ?> </td>
 <td> <?php echo "AP". $res['sid'];  ?> </td>
 <td> <?php echo $res['names'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['mobile'];  ?> </td>
 <td> <?php echo $res['reason'];  ?> </td>
 <td> <?php echo $res['from_date'];  ?> </td>
 <td> <?php echo $res['to_date'];  ?> </td>
 <td> <?php echo $res['fstatus'];  ?> </td>
 <td> <?php echo $res['department'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Reject </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="accept.php?id=<?php echo $res['id']; ?>" class="text-white"> Accept </a> </button> </td>
 <td> <button class="btn-primary btn"> <a href="imagedis.php?id=<?php echo $res['id']; ?>" class="text-white"> View Image </a> </button> </td>

 </tr>

 <?php 
 }

  ?>
 
 </table>  
<br>
<div align="center">
<a href="../newindex.php">GO TO DASHBOARD</a>
</div>
 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>