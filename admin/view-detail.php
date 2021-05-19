     <?php 
     ob_start();
     require_once '../library/lib.php';
     require_once '../classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;

     $lib->check_login2();

      $ql=$crud->displayById('application',$_GET['id']);
     ?>


<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>LECTURER TETFUND SCHOOLARSHIP APPLICATION SYSTEM</title>
    
    <!-- Basic SEO -->
    <meta name="description" content="LECTURER TETFUND SCHOOLARSHIP APPLICATION SYSTEM">
    <meta name="keywords" content="LECTURER TETFUND SCHOOLARSHIP APPLICATION SYSTEM">

    <!-- Favicon -->
    <link rel="icon" type="img/jpg" href="img/bsu2.jpg">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">
         <?php
         include "inc/header.php";
         ?>
         <!-- End header header -->
         <!-- Left Sidebar  -->
         <?php
         include "inc/sidebar.php";
         ?>     
         <!-- End Left Sidebar  -->
         <!-- Page wrapper  -->
         <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">View Detail</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- End Bread crumb -->
                <!-- Container fluid  -->
                <div class="container-fluid">
                    <!-- Start Page Content -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>VIEW DETAILS</h4>


                                </div>
                                <div class="card-body">

                     <div class="row">
                                        <div class="col-md-10">
                                           <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Name of Candidate/Staff :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['name'])?>" disabled="disabled">

                                        </div>
                                         <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Name of Institute Applied For :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['aschool'])?>" disabled="disabled">

                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Programme Applied : :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['aprogram'])?>" disabled="disabled">

                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Candidate/Staff Gender :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['gender'])?>" disabled="disabled">

                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Date of Birth :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['dob'])?>" disabled="disabled">

                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Institution Name :</p>
                                           <input type="text" class="form-control input-rounded" value="<?=$crud->displayNameById('school',$ql['school_id']); ?>" disabled="disabled">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Salary Account No/Name of Bank :</p>
                                             <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['acc'])?>" disabled="disabled">
                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Email Address/Telephone No :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['eot'])?>" disabled="disabled">
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Candidate/Staff Passport :</p>
                                            <img src="../application_images/<?=strtoupper($ql['passport'])?>" height="200" width="180"/><br>
                                        </div>
                                    </div>
                                </div>




                                <hr style="border:3px solid black;">
                                <h3>QUALIFICATIONS WITH DATE</h3>

                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Department of Lecturing :</p>
                                     <input type="text" class="form-control input-rounded" value="<?=$crud->displayNameById('department',$ql['department_id']); ?>" disabled="disabled">

                                </div>


                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">First Qualification :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['fq'])?>" disabled="disabled">

                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Second Qualification :</p>
                                           <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['sq'])?>" disabled="disabled">
                                            
                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Third Qualification :</p>
                                           <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['tq'])?>" disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date :</p>
                                        <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['fqd'])?>" disabled="disabled">

                                    </div>
                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date :</p>
                                       <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['sqd'])?>" disabled="disabled">

                                    </div>
                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date :</p>
                                       <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['tqd'])?>" disabled="disabled">

                                    </div>
                                </div>
                            </div>

                            <hr style="border:3px solid black;">

                            <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date of 1st Appointment :</p>
                                        <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['fap'])?>" disabled="disabled">

                                    </div>

                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Duration of entire work Experience :</p>
                                <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['etd'])?>" disabled="disabled">

                            </div>
                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Number of years spent in the Institute :</p>
                               <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['yapt'])?>" disabled="disabled">
                    </div>
                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Other Remark :</p>
                               <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['remark'])?>" disabled="disabled">
                            </div>

                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Year of Application :</p>
                                <input type="text" class="form-control input-rounded" value="<?=strtoupper($ql['yapl'])?>" disabled="disabled">
                    </div>

                     <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Application Status :</p>
                                <input type="text" class="form-control input-rounded" 
                                value="<?=($ql['status']=='0')?'Processing':'Accepted'?>" disabled="disabled">
                    </div>

                            

                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">Admission Letter :</h3></p>
                                        <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['al']; ?>"></a>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">Bond Form :</h3></p>
                                        <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['bf']; ?>"></a>
                                        </div>

                                    </div>
                               
                                  <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">Budget Estimate :</h3></p>
                                    <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['be']; ?>"></a>
                                        </div>

                                </div>  
                            
                            
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">CV :</h3></p>
                                    <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['cv']; ?>"></a>
                                        </div>

                                </div>
                           
                            
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">Medical Certificate :</h3></p>
                                   <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['mc']; ?>"></a>
                                        </div>

                                </div>
                           
                           
                              <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">Study Leave :</h3></p>
                                <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['sl']; ?>"></a>
                                        </div>

                            </div>  
                      
                       
                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">University Bank Details :</h3></p>
                               <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['ubd']; ?>"></a>
                                        </div>

                            </div>
                        
                       
                          <div class="form-group">
                            <p class="text-muted m-b-15 f-s-12"><h3 style="font-weight: bolder;text-align: center;color: #000;">Research Proposal :</h3></p>
                            <div class="embed-responsive embed-responsive-16by9">
                                              <a class="media" href="../application_documents/<?php echo $ql['rp']; ?>"></a>
                                        </div>

                        </div>  
                    

                </div>



                                </div>


                            </div>



                 </div>
                 <!-- /# column -->
             </div>
             <!-- End PAge Content -->
         </div>
         <!-- End Container fluid  -->
         <!-- footer -->

         <!-- FOOTER REGION -->
         <?php
         include "inc/footer.php";
         ?>

         <!-- End footer -->
     </div>
     <!-- End Page wrapper  -->
 </div>
 <!-- End Wrapper -->
 <!-- All Jquery -->
 <script src="js/lib/jquery/jquery.min.js"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="js/lib/bootstrap/js/popper.min.js"></script>
 <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>

                 <!--PDF VIEWER JavaScript -->
                <script src="js/vendor/jquery-1.12.4.min.js"></script>
                <script src="js/jquery.media.js"></script>
                <script src="js/pdf-active.js"></script>

 <!-- slimscrollbar scrollbar JavaScript -->
 <script src="js/jquery.slimscroll.js"></script>
 <!--Menu sidebar -->
 <script src="js/sidebarmenu.js"></script>
 <!--stickey kit -->
 <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
 <!--Custom JavaScript -->
 <script src="js/scripts.js"></script>

</body>

</html>