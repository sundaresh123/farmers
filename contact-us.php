
<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<title>Farmers Foundation NGO | contact us</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <?php $page="contact-us.php"; include 'link.php';?>
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
    <section class="page-title" style="background-image:url(images/background/3.jpg);">
        <div class="container">
            <div class="title-text clearfix">
                <h1>Contact Us</h1>
                <ul class="title-menu">
                    <li><a href="index.php">home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>           
        </div>
    </section>
    <!--End Page Title-->
       

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h3>Contact <span>Info</span></h3>
                    </div>                    
                    <ul class="contact-list">
                        <li class="item">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h5>Address</h5>
                            <p>Nalavariya aluvalagam,Palaiyavettu vasathi variyam,Ellis nagar(A),Dharapuram,Tirupur-638 657</p>
                         </li>
                        <li class="item">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h5>Phone</h5>
                            <p>8903605577 <br> 9994695606</p>
                        </li>
                        <li class="item">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h5>Email</h5>
                            <p>farmersfoundation@yahoo.com </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h3>Send <span>Message</span></h3>
                    </div>                    
                    <div class="default-form-area">
                        <form id="contact-form" name="contact_form" class="default-form"  method="post" action="mail.php" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" id="name_1" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="email" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Address" id="address" name="address">
                                    </div>
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn-style-two"  type="submit" value="Submit" id="submit" data-loading-text="Please wait...">send message</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea placeholder="message" name="comments"></textarea>
                                    </div>
                                </div>
                            </div>                                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Start Google map area-->
    <section class="google-map-area">
          <div class="sec-title text-center pdb-30">
                <h3>Contact <span>Map</span></h3> 
            </div> 
      <div class="container">
        <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=VINAYAGA%20MOTORS%2C%20MANGALAM%2C%20TIRUPUR%20-%20641%20663&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div> 
        </div>
     </div>
     <!--    <div class="container">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="44.799511" 
                data-map-lng="-106.951309" 
                data-icon-path="images/resource/map-marker_1.png" 
                data-map-title="Sheridan School Special Education" 
                data-map-zoom="12"
                data-markers='{
                    "marker-1": [44.799511, -106.951309, "<h4>Sheridan School Special Education</h4><p>201 N Connor St Sheridan, WY 82801</p>","images/resource/map-marker_1.png"]
                }'>

            </div>                    
        </div>        -->   
     
    </section>
    <!--End Google map area-->  


   
    <!--Main Footer-->
    <?php include 'footer.php';?>
    <!--Main Footer-->


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



<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>


<script src="js/script.js"></script>





</body> 
</html>
