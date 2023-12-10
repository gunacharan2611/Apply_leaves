<?php
session_start();
if(isset($_SESSION['fuid'])!=NULL){
    $regnum=$_SESSION['fuid'];
    //echo "ddfdsfdsfgxfgvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvdsffsdfd".$regnum;
    include("newindex1.php");
    $connect = mysqli_connect("localhost", "root", "", "srm");
    $query = "SELECT * FROM faculty where reg_number=$regnum ";
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
    <td><?php echo $res["reg_number"];?></td>
    </tr>
    <tr>
    <td>Department</td>
    <td><?php echo $res["department"];?></td>

    </tr>
    <tr>
    <td>Designation</td>
    <td><?php echo $res["designation"];?></td>

    </tr>

    <tr>
    <td>Mobile</td>
    <td><?php echo $res["mobile"];?></td>

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


