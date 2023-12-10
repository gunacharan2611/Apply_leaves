<?php
session_start();
if(isset($_SESSION['suid'])!=NULL){
    include('newindex1.php');
    echo'
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    
       
        <div class="page-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" action="bonafideaction.php" method="post"  >
                        
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Reason</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Reason Here" name="reason" required></textarea>
                                        </div>
                                    </div>

                
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" name="bonafide">Submit</button>
                                    </div>
                                </div>
                            </form>
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
</style>
'
;
}
?>

