<!DOCTYPE html>  
 <html>  
<table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                 $connect = mysqli_connect("localhost", "root", "", "srm");
                 
                $data=$_GET['id'];
                

               



                $query = "SELECT * FROM images where id= $data" ;  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="2000" width="2400" class="img-thumnail; ?>" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table> 
                </html> 