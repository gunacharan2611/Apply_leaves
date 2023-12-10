
<?php
session_start();
if(isset($_SESSION['Auid'])!=NULL){
    include('header.php');
    
echo '<div class="pcoded-content">
<!-- [ breadcrumb ] start -->
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->

                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Select One</label>
                                            <div class="col-sm-10">
                                                <form  action="#" method="post">
                                                    <select name="select" class="form-control">
                                                    
                                                        <option value="student">Student</option>
                                                        <option value="faculty">Faculty</option>
                                                    </select>
                                                    <input type="submit" name="submit" class="submit">
                                                </form>
                                                
                                            </div>
                                        </div>

                        
                                   
                        
                                                    </div>
</div>
</div>';
}

	
?>
<style>
.form-control{
position:relative;
left:50px;
width:250px;

}
.submit{
position:relative;
top:15px;
left:120px;
}
</style>


                    
<?php
include('formaction.php');
	include('footer.php');
?>