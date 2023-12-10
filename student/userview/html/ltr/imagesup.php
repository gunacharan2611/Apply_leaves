<?php  
 $connect = mysqli_connect("localhost", "root", "", "srm");  
 session_start();
 if(isset($_SESSION['suid'])!=NULL){
     // echo ''.$_SESSION['suid'];
      $regnumber=$_SESSION['suid'];
      //echo ''.$regnumber;
      $sid=$regnumber;
      $id = $_SESSION['id'];
      $formid=$_SESSION['formid'];
      $formname=$_SESSION['form'];
      $query2 = "SELECT now()";  
 $result2 = mysqli_query($connect, $query2); 


$res2 = mysqli_fetch_array($result2);
$date= $res2["now()"];
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO images(sid,image,uploaded_date,form_id, id) VALUES ($sid,'$file','$date',$formid, $id)";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Uploaded Succssfully")</script>';
           header("Location:tableviewnew\Display.php");
             
      }  
 }  
}
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Upload Image</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Uplaod Image Of Form</h3>  
               <?php echo "<br><br><br><p align='center'> <font color=red  size='2pt'>Note:-Image size < 1MB will be Accepted</font> </p>"?>;

                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Upload" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  