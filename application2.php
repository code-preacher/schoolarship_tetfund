<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

if (isset($_POST['sub'])) {
    $crud->addApplication($_POST,$_FILES);
}
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
    <link rel="icon" type="img/jpg" href="admin/img/bsu2.jpg">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
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

           <!-- End Left Sidebar  -->

           <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">TETFUND APPLICATION FORM</h3> </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" style="color: purple;">Click to go back to Home</a></li>
                              <li class="breadcrumb-item"><a href="application-check.php" style="color: green;">Check Application Status</a></li>
                            <li class="breadcrumb-item active">Application Form</li>
                        </ol>
                    </div>
                </div>
                <!-- End Bread crumb -->
           <!-- Page wrapper  -->
           <!-- Container fluid  -->
           <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>PLEASE SUPPLY ALL DATA AS SPECIFIED, NOTE THAT ALL REQUIRED DOCUMENT FOR UPLOADS MUST BE IN PDF FORMAT</h4>

                            <p><?=$lib->msg();?></p>

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="application2.php" method="POST" enctype="multipart/form-data">



                                    <div class="row">
                                        <div class="col-md-10">
                                           <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Name of Candidate/Staff :</p>
                                            <input type="text" class="form-control input-rounded" name="name" placeholder="Please enter Candidate/Staff name" required="required">

                                        </div>
                                         <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Name of Institute Applied For :</p>
                                            <input type="text" class="form-control input-rounded" name="aschool" placeholder="Please enter Name of Institute Applied For" required="required">

                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Programme Applied :</p>
                                            <select class="form-control input-rounded"  name="aprogram" title="Programme Applied" placeholder="Programme Applied">
                                                <option value="MSC">MSC</option>
                                                <option value="PHD">PHD</option>

                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Select Gender :</p>
                                            <select class="form-control input-rounded" name="gender" required="required">
                                                <option value="MALE">MALE</option>
                                                <option value="FEMALE">FEMALE</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Date of Birth (format DD/MM/YY):</p>
                                            <input type="date" class="form-control input-rounded" name="dob" placeholder="Please enter date of birth in this format DD/MM/YY" required="required">

                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Institution Name :</p>
                                            <select class="form-control input-rounded"  name="school_id" title="Institution of Lecturing" required="required">
                                                <?php
                                                $rt=$crud->displayAllWithOrder('school','id','desc');
                                                foreach ($rt as $f) {
                                                    ?>
                                                    <option value="<?php echo $f['id'];  ?>"><?php echo strtoupper($f['name']);  ?></option>

                                                <?php } ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Salary Account No/Name of Bank :</p>
                                            <input type="text" class="form-control input-rounded" name="acc" placeholder="Please enter Salary Account No/Name of Bank " required="required">
                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Email Address/Telephone No :</p>
                                            <input type="text" class="form-control input-rounded" name="eot" placeholder="Please enter Email Address/Telephone No" required="required">

                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Upload Passport :</p>
                                            <img id="list1" height="200" width="220"/><br>
                                            <input type="file" name="img1" id="upfile1" accept="image/jpeg, image/png, image/jpg, image/gif">
                                        </div>
                                    </div>
                                </div>




                                <hr style="border:3px solid black;">
                                <h3>QUALIFICATIONS WITH DATE</h3>

                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Department of Lecturing :</p>
                                    <select class="form-control input-rounded" name="department_id" title="Department of Lecturing" placeholder="Department of Lecturing" required="required">
                                        <?php
                                        $rt=$crud->displayAllWithOrder('department','id','desc');
                                        foreach ($rt as $f) {
                                            ?>
                                            <option value="<?php echo $f['id'];  ?>"><?php echo strtoupper($f['name']);  ?></option>

                                        <?php } ?>

                                    </select>

                                </div>


                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">First Qualification :</p>
                                            <select class="form-control input-rounded"  name="fq" title="First Qualification" placeholder="First Qualification">
                                                <option value="BSC">BSC</option>
                                                <option value="MSC">MSC</option>
                                                <option value="PHD">PHD</option>
                                                <option value="NONE">NONE</option>

                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Second Qualification :</p>
                                            <select class="form-control input-rounded"  name="sq" title="Second Qualification" placeholder="Second Qualification">
                                                <option value="BSC">BSC</option>
                                                <option value="MSC">MSC</option>
                                                <option value="PHD">PHD</option>
                                                <option value="NONE">NONE</option>

                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Third Qualification :</p>
                                            <select class="form-control input-rounded"  name="tq" title="Third Qualification" placeholder="Third Qualification">
                                                <option value="BSC">BSC</option>
                                                <option value="MSC">MSC</option>
                                                <option value="PHD">PHD</option>
                                                <option value="NONE">NONE</option>

                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date :</p>
                                        <input type="date" class="form-control input-rounded" name="fqd" placeholder="Please enter date in this format DD/MM/YY">

                                    </div>
                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date :</p>
                                        <input type="date" class="form-control input-rounded" name="sqd" placeholder="Please enter date in this format DD/MM/YY">

                                    </div>
                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date :</p>
                                        <input type="date" class="form-control input-rounded" name="tqd" placeholder="Please enter date in this format DD/MM/YY">

                                    </div>
                                </div>
                            </div>

                            <hr style="border:3px solid black;">

                            <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Date of 1st Appointment :</p>
                                        <input type="date" class="form-control input-rounded" name="fap" placeholder="Please enter date in this format DD/MM/YY" required="required">

                                    </div>

                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Duration of entire work Experience :</p>
                                <select class="form-control input-rounded" name="etd" placeholder="Duration of entire work Experience" required="required">
                            <?php
                            for($f=1;$f<=50;$f++) {
                                ?>
                                <option value="<?=$f ?>"><?=$f ?></option>
                                
                            <?php } ?>

                        </select>

                            </div>
                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Number of years spent in the Institute :</p>
                                <select class="form-control input-rounded" name="yapt" placeholder="Number of years spent in the Institute" required="required">
                            <?php
                            for($f=1;$f<=50;$f++) {
                                ?>
                                <option value="<?=$f ?>"><?=$f ?></option>
                                
                            <?php } ?>

                        </select>
                    </div>
                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Other Remark :</p>
                                <input type="text" class="form-control input-rounded" name="remark" placeholder="Please enter Other Remark" required="required">

                            </div>

                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Year of Application :</p>
                                <select class="form-control input-rounded" name="yapl" placeholder="Year of Application" required="required">
                            <?php
                            for($f=2020;$f<=2099;$f++) {
                                ?>
                                <option value="<?=$f ?>"><?=$f ?></option>
                                
                            <?php } ?>

                        </select>
                    </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Upload Admission Letter :</p>
                                        <input type="file" class="form-control input-rounded" name="al" placeholder="Please Upload Admission Letter" required="required">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">Upload Bond Form :</p>
                                        <input type="file" class="form-control input-rounded" name="bf" placeholder="Please Upload Bond Form" required="required">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Upload Budget Estimate :</p>
                                    <input type="file" class="form-control input-rounded" name="be" placeholder="Please Upload Budget Estimate" required="required">

                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Upload CV :</p>
                                    <input type="file" class="form-control input-rounded" name="cv" placeholder="Please Upload CV" required="required">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="text-muted m-b-15 f-s-12">Upload Medical Certificate :</p>
                                    <input type="file" class="form-control input-rounded" name="mc" placeholder="Please Upload Medical Certificate" required="required">

                                </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Upload Study Leave :</p>
                                <input type="file" class="form-control input-rounded" name="sl" placeholder="Please Upload Study Leave" required="required">

                            </div>  
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="text-muted m-b-15 f-s-12">Upload University Bank Details :</p>
                                <input type="file" class="form-control input-rounded" name="ubd" placeholder="Please Upload University Bank Details" required="required">

                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <p class="text-muted m-b-15 f-s-12">Upload Research Proposal :</p>
                            <input type="file" class="form-control input-rounded" name="rp" placeholder="Please Upload Research Proposal " required="required">

                        </div>  
                    </div>

                </div>



                <div class="form-actions">
                    <button type="submit" name="sub" class="btn btn-success col-md-3"> <i class="fa fa-plus"></i> Make Application</button>
                    <button type="reset" class="btn btn-inverse col-md-3"><i class="fa fa-refresh"></i> Clear</button>
                </div>









            </form>
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
include "admin/inc/footer.php";
?>

<!-- End footer -->

<!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
          '" title="', escape(theFile.name), '" width="120" height="120"/>'].join('');
          document.getElementById('list1').insertBefore(span, null);
          document.getElementById("list1").src=e.target.result;

      };
  })(f);
  reader.readAsDataURL(f);
}
}

document.getElementById('upfile1').addEventListener('change', handleFileSelect, false);

</script>
<!-- All Jquery -->
<script src="admin/js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
<script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="admin/js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="admin/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="admin/js/scripts.js"></script>

</body>

</html>