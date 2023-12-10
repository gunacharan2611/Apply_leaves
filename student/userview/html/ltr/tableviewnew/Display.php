<!DOCTYPE html>
<html>
<head>
 <title>History</title>

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
       <th>Reason</th>
       <th>from_date</th>
       <th>to_date</th>
       <th>status</th>
       

 </tr >

 <?php
session_start();
//echo "".$_SESSION['designation'];
$reg=$_SESSION['suid'];
//$formid=$_SESSION['formid'];
$sid=$reg;

 include 'conn.php'; 
 $q = "select forms_reason.id, forms_reason.sid,forms_reason.reason,forms_reason.from_date,forms_reason.to_date,forms_reason.fstatus,forms_data.formname from 
 forms_reason inner join forms_data on forms_reason.form_id=forms_data.form_id where sid=$sid";

 $query = mysqli_query($con,$q);
 
 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['formname'];  ?> </td>
 <td> <?php echo "AP".$res['sid'];  ?> </td>
 <td> <?php echo $res['reason'];  ?> </td>
 <td> <?php echo $res['from_date'];  ?> </td>
 <td> <?php echo $res['to_date'];  ?> </td>
 <td> <?php echo $res['fstatus'];  ?> </td>
 <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class = "text-white"> Delete </a> </button> </td>

 </tr>

 <?php 
 

 
 
 }
 
 echo "<br><br><br><p align='center'> <font color=green  size='4pt'>Please collect accepted forms from Admin Block. Rejected one's are deleted. Thank you!!</font> </p>";

 
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
 <div align="center">
<br><br><a class="dash" href="../newindex.php" >GO TO DASHBOARD  </a>
</div>
</body>
</html>
