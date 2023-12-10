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
                            <form class="form-horizontal" action="medicalaction.php" method="post"  >
                                <div class="card-body">
                                    <h4 class="card-title">MEDICAL LEAVE FORM</h4>
                                    
                                    
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">From-Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email1" placeholder="" name="from_date" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">To-Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email1" placeholder="" name="to_date" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Reason Here" name="reason" required></textarea>
                                        </div>
                                    </div>

                
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" name="medical">Submit</button>
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

