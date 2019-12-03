<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <title>Farmers Foundation NGO | Student Scholarship</title>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
     <?php $page="current"; include 'link.php';?>
</head>


<body>
    <div class="page-wrapper">  
        <!-- Preloader -->


        <!-- .preloader -->
        <div class="preloader"></div>
        <!-- /.preloader -->

        <!--Header search-->
        <section class="header-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="search-form pull-right">
                            <form action="#">
                                <div class="search">
                                    <input type="search" name="search" value="" placeholder="Search Something">
                                    <button type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Header search-->


        <!-- Main Header-->
            <?php include 'header.php';?>
        <!--End Main Header -->


<!--Page Title-->
<section class="page-title" style="background-image:url(images/main-slider/biogas_1.jpg);">
    <div class="container">
        <div class="title-text clearfix">
            <h1>Biogas Scholarship</h1>
            <ul class="title-menu">
                <li><a href="index.php">home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Biogas Scholarship</li>
            </ul>
        </div>           
    </div>
</section>
<!--End Page Title-->


<!--about-section Style-->
<section class="about-section">
    <div class="container">
        <div class="sec-title text-center">
            <h3 class="pdb-30">Biogas <span>Registration</span></h3>
        </div>

        <div class="row">
            <div class="col-md-1 col-sm-6 col-xs-12 ">

            </div>
            <div class="col-md-10 col-sm-6 col-xs-12 ">

                <form class="form-horizontal" role="form" action="process.php" method="post">

                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">1).பெயர் <br>Name : </label>
                        <div class="col-sm-8">
                            <input type="text" id="name" placeholder="Name" name="firstname" class="form-control" autofocus required>
                         </div>
                    </div>
                    <div class="form-group">
                        <label for="father_name" class="col-sm-4 control-label">2).தந்தை / கணவர் பெயர்  <br> Father /        Husband Name : </label>
                        <div class="col-sm-8">
                            <input type="text" id="father_name" name="father_name" placeholder="Father /Husband Name" class="form-control" required>
                         </div>
                    </div>
                      
                     
                     <div class="form-group">
                        <label for="student_aadhar" class="col-sm-4 control-label">3). ஆதார் என்    <br> Aadhar No: </label>
                        <div class="col-sm-8">
                            <input type="text" id="aadhar" name="student_aadhar" placeholder="Aadhar Number" class="form-control" required>
                         </div>
                     </div>
                     
                     <div class="form-group">
                        <label for="contact" class="col-sm-4 control-label">4).தொடர்ப்பு என்  <br> Contact No: </label>
                        <div class="col-sm-8">
                            <input type="text" id="contact" name="contact" placeholder="Contact Number" class="form-control" required>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">5).முகவரி   <br> Address : </label>
                        <div class="col-sm-8">
                            <textarea type="text" id="address" name="address" placeholder="Address" class="form-control" required></textarea>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">6). தேதி   <br> Date : </label>
                        <div class="col-sm-8">
                            <input type="date" id="date" name="date" placeholder="Date" class="form-control" required> 
                         </div>
                     </div>
                      <div class="form-group">
                        <label for="sc_address" class="col-sm-4 control-label">7).Amount : </label>
                        <div class="col-sm-8">
                            <input type="text" id="amount" name="amount" value="Rs.15000 /-" class="form-control" readonly required> 
                         </div>
                     </div>
                      
                 
                    <div class="form-group">
                        <div class="col-sm-3 col-sm-offset-4">
                            <button type="submit" name="submit_1" class="btn btn-success btn-block">Register</button>
                        </div>
                    </div>
                </form> <!-- /form -->
                

            </div>
            <div class="col-md-1 col-sm-6 col-xs-12 ">

            </div>

        </div>
    </div>
</section>
<!--about-section Style-->


 

   <?php include 'footer.php';?>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script> 
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/circle-progress.js"></script>
<script src="js/owl.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script src="js/masterslider/masterslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/script.js"></script>
</body> 
</html>
