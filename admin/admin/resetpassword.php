
<?php
session_start();
if(isset($_SESSION['Auid'])!=NULL){
   include("header.php");
    
echo '


<div class="pcoded-content">
                        <!-- [ breadcrumb ] start -->
                        
                        <!-- [ breadcrumb ] end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->

                                                

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h1>Reset Password</h1>

                                                    </div>
                                                    <div class="card-block">
                                                        <form action="resetpasswordaction.php" method="post">
                                                            

                                                            
                                                          
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control"
                                                                    placeholder=" Current Password" name="password">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control" name="newpassword"
                                                                    placeholder="New password">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Mobile</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" name="mobile" placeholder="Mobile"
                                                                    >
                                                                </div>
                                                            </div>

                                                            <input type="submit" name="reset" value="Reset" >
                                        
                                                                    </form>
                                                                  
                                                                </div>
                                                            </div>
                                                            <!-- Basic Form Inputs card end -->
                                                           
                                                            
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Page body end -->
                                                        </div>
                            </div>
                        </div>
                    </div>
					
';
}

else{
    echo '<img src="error.png" width="40%">';
}
    



   
?>



                    
<?php

	include('footer.php');
?>