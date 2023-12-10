<?php
session_start();
if(isset($_SESSION['suid'])!=NULL){
    $regnum=$_SESSION['suid'];
    //echo "ddfdsfdsfgxfgvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvdsffsdfd".$regnum;
    include('newindex1.php');
    $connect = mysqli_connect("localhost", "root", "", "srm");
    $query = "SELECT * FROM users where sid='$regnum' ";
    $result = mysqli_query($connect, $query); 
    while($res = mysqli_fetch_array($result)){
       //echo "frefcwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww".$res["reg_number"];

        ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
        <div class="page-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            
                        <table id="t01" >
  
  <tr>
  <td>Name</td>
      <td><?php echo $res["names"];?></td>

    </tr>
    <tr>
    <td>Registration Number</td>
    <td><?php echo "AP".$res["sid"];?></td>
    </tr>
    <tr>
    <td>Department</td>
    <td><?php echo $res["department"];?></td>

    </tr>
    <tr>
    <td>Semester</td>
    <td><?php echo $res["semester"];?></td>

    </tr>
    <tr>
    <td>Batch</td>
    <td><?php $year=$regnum[2].$regnum[3]; echo "20".$year." - 20".strval((int)($year)+4);?></td>

    </tr>
  </tr>

  
  
</table>
                        </div>  
                <!-- editor -->
               
                
            </div>
            
        </div>
        
    </div>
   
</body>

</html>
<style>
.form-horizontal{
    position:relative;
    top:0px;
}
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}

</style>
<?php
    }
}
?>


