<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<title>Farmers Foundation NGO | gallery page</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <?php $page="gallery.php"; include 'link.php';?>
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
                <h1>our gallery</h1>
                <ul class="title-menu">
                    <li><a href="index.php">home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>our gallery</li>
                </ul>
            </div>           
        </div>
    </section>
    <!--End Page Title-->


    <!--Gallery Section-->
    <section class="gallery-section padd-bott-70">
        <div class="container">    
            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix">
                        <!--  <li class="active filter" data-role="button" data-filter=".all"><span class="txt">Show All</span></li>
                        <li class="filter" data-role="button" data-filter=".charity"><span class="txt">Charity</span></li>
                        <li class="filter" data-role="button" data-filter=".children"><span class="txt">Children</span></li>
                        <li class="filter" data-role="button" data-filter=".education"><span class="txt">Education</span></li>
                        <li class="filter" data-role="button" data-filter=".donate"><span class="txt">Donate</span></li> -->
                    </ul>
                </div>
                <div class="row items-container clearfix">                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all charity education children">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/33.jpg" alt=""></figure>
                            <div class="overlay-box text-center">           
                                <a href="images/gallery/33.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2.jpg" alt=""></figure>
                            <div class="overlay-box text-center">              
                                <a href="images/gallery/2.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/3.jpg" alt=""></figure>
                            <div class="overlay-box text-center">        
                                <a href="images/gallery/3.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all charity education children">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/4.jpg" alt=""></figure>
                            <div class="overlay-box text-center">             
                                <a href="images/gallery/4.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children donate">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/5.jpg" alt=""></figure>
                            <div class="overlay-box text-center">          
                                <a href="images/gallery/5.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/6.jpg" alt=""></figure>
                            <div class="overlay-box text-center">             
                                <a href="images/gallery/6.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education donate">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/7.jpg" alt=""></figure>
                            <div class="overlay-box text-center">              
                                <a href="images/gallery/7.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children donate">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/8.jpg" alt=""></figure>
                            <div class="overlay-box text-center">         
                                <a href="images/gallery/8.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all charity donate education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/9.jpg" alt=""></figure>
                            <div class="overlay-box text-center">      
                                <a href="images/gallery/9.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all charity education donate">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/10.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/10.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all donate">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/11.jpg" alt=""></figure>
                            <div class="overlay-box text-center">         
                                <a href="images/gallery/11.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/12.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/12.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/13.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/13.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/14.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/14.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/15.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/15.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/16.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/16.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/17.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/17.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/18.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/18.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/19.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/19.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/20.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/20.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/21.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/21.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/22.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/22.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/23.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/23.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/24.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/24.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/25.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/25.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/26.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/26.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/27.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/27.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/28.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/28.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/29.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/29.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/30.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/30.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/31.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/31.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/32.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/32.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/33.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/33.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/34.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/34.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/35.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/35.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/36.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/36.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/37.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/37.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/38.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/38.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/39.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/39.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/40.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/40.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/41.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/41.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/42.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/42.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/43.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/43.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/44.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/44.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/45.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/45.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/46.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/46.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/47.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/47.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/48.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/48.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/49.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/49.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/50.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/50.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/51.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/51.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/52.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/52.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/53.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/53.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/54.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/54.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/55.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/55.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/56.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/56.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/57.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/57.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/58.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/58.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/59.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/59.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/60.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/60.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/61.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/61.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/62.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/62.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/63.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/63.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/64.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/64.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/65.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/65.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/66.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/66.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/67.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/67.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/68.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/68.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/69.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/69.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/70.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/70.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/71.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/71.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/72.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/72.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/73.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/73.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/74.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/74.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Default Portfolio Item-->
                    <div class="col-md-3 col-sm-6 col-xs-12 masonry-item default-portfolio-item all children charity education">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/75.jpg" alt=""></figure>
                            <div class="overlay-box text-center">                
                                <a href="images/gallery/75.jpg" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    
 
                </div>          
            </div>            
        </div>
    </section>
    <!--End Gallery Section-->

 
   
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
