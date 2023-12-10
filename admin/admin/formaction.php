<?php
                                                
                                                if(isset($_SESSION['Auid'])!=NULL){
                                                    
                                                    if(isset($_POST['submit'])){
                                                        $val = $_POST['select']; 
                                                        if($val=="student"){
                                                            //echo "HII".$_SESSION['Auid'];
                                                            include("student.html");
                                                        }
                                                        elseif($val=="faculty"){
                                                            include("faculty.php");

                                                        }
                                                        
                                                    }
                                                }
                                                else{
                                                    header("Loaction:../index.html");
                                                }
                                                        
                                                ?>