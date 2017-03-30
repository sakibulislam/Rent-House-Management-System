<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Rent House</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>      
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="<?php echo e(URL::to('js/responsee.js')); ?>"></script>

      
      <!-- <script src="/scripts/jquery.min.js"></script> -->
      
 
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="#">DESIGN <br /><strong>THEME</strong></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="<?php echo e(route('homeguest')); ?>">Home</a>
                        </li>
                        <li><a href="<?php echo e(route('about')); ?>">About</a>
                        </li>
                        <li><a href="<?php echo e(route('house')); ?>">House</a>
                        </li>
                        <li><a href="<?php echo e(route('services')); ?>">Services</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="#">RENT <br /><strong>HOUSE</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="<?php echo e(route('gallery')); ?>">Gallery</a>
                        </li>
                        <li>
                           <a href="<?php echo e(route('login')); ?>">Login</a>             
                           <!-- <ul>
                              <li><a>Admin</a>
                              </li>
                              <li><a>Tenant</a>
                              </li>
                              <li>
                               <a>Owner</a>
                              </li>
                           </ul> -->
                        </li>
                        <li><a href="<?php echo e(route('register')); ?>">Sign Up</a>
                        </li>
                        <li><a href="https://www.google.com/" target="_blank">Search Bar</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>

         


          <div class="content">
          <?php echo $__env->yieldContent('content'); ?>
          </div>
 
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2017, Vision Design 
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Sakibul Team</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
            slideSpeed : 300,
            autoPlay : true,
            navigation : false,
            pagination : false,
            singleItem:true
           });
           $("#owl-demo2").owlCarousel({
            slideSpeed : 300,
            autoPlay : true,
            navigation : false,
            pagination : true,
            singleItem:true
           });
         });   
          
      </script> 
   </body>
</html>