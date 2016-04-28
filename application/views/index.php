
<!DOCTYPE php>
<php>
<head>
<title>Klabs</title>
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/agency.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Knowledge labs responsive" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>


 <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>




<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('php,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
 
</head>
<body>
<!--header-banner-->
		<div class="header">
			<div class="container">
				<div class="header-top">
					<div class="logo">
						<a href="index.php">Knowledge <span>Labs</span></a>
					</div>
						<div class="social-icons">
							<a href="#"><i class="icon1"></i></a>
								<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
												<a href="#"><i class="icon4"></i></a>
						</div>	
							<div class="clearfix"></div>
				</div>
				<div class="top-menu">
					<span class="menu"><img src="<?php echo base_url();?>img/menu.png" alt=""/>  </span>
						<ul>
							<li><a href="<?php echo base_url();?>" class="active">Home</a></li>
								<li><a href="<?php echo base_url();?>index.php/about">About</a></li>
									<li><a href="<?php echo base_url();?>index.php/services">Services</a></li>
										<li><a href="<?php echo base_url();?>index.php/portfolio">Portfolio</a></li>
											<li><a href="<?php echo base_url();?>index.php/home">Blog</a></li>
												<li><a href="<?php echo base_url();?>index.php/contact">Contact</a></li>
												<!-- script for menu -->
							<script>
							 $("span.menu").click(function(){
							 $(".top-menu ul").slideToggle("slow" , function(){
							 });
							 });
							 </script>
							<!-- //script for menu -->

						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="index-banner">
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
				   	       			<div class="banner_center">
										<h1>Lorem ipsum dolor sit amet</h1> 
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
									</div>
								</div>
							</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   	<div class="banner-wrap">
				   	      <div class="banner_center">
										<h1>Ipsum Lorem dolor sit amet</h1> 
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
									</div>
				   		  </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	  	<div class="banner-wrap">
				   	       <div class="banner_center">
										<h1>Lorem ipsum dolor sit amet</h1> 
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
									</div>
				   		 </div>
					 </article>
					 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="">2</a></li>
                </ul>

				 </div>
				
            </div>

	</div>
	<script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	

			</div>
		</div>
			<!--div class="banner-bottom">
				<div class="container">
				<ul id="flexiselDemo3">
				 <li>
					<div class="biseller-column">
							<div class="banner-grid">
							  <img src="<?php echo base_url();?>img/p1.jpg" class="img-responsive" alt="/">
							</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
							<div class="banner-grid">
							    <img src="<?php //echo base_url();?>img/p2.jpg" class="img-responsive" alt="/">
							</div>
						</div>
				</li>
				<li>
					<div class="biseller-column">
							<div class="banner-grid">
							<img src="<?php //echo base_url();?>img/p3.jpg" class="img-responsive" alt="/">
							</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
							<div class="banner-grid">
							 <img src="<?php //echo base_url();?>img/p4.jpg" class="img-responsive" alt="/">
						</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
							<div class="banner-grid">
							 <img src="<?php //echo base_url();?>img/p19.jpg" class="img-responsive" alt="/">
						</div>
					</div>
				</li>
	     	</ul>
		  </div-->
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems:3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems:2
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems:2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems:3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
		    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Team Members</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/ian1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ian Ogema</h4>
                        <p class="text-muted">SoftWare Dev</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/evelyn.jpg" class="img-responsive img-circle" alt="">
                        <h4>Eve Kilel</h4>
                        <p class="text-muted">Software Dev</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/mus.jpg" class="img-responsive img-circle" alt="">
                        <h4>Brian Musau</h4>
                        <p class="text-muted">Software Dev</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/clint.jpg" class="img-responsive img-circle" alt="">
                        <h4>Clint Obura</h4>
                        <p class="text-muted">Software Dev</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/shem.jpg" class="img-responsive img-circle" alt="">
                        <h4>Brian Shem</h4>
                        <p class="text-muted">Software Dev</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/nelly.jpg" class="img-responsive img-circle" alt="">
                        <h4>Nelly Chege</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/nelly.jpg" class="img-responsive img-circle" alt="">
                        <h4>Maryanne Ndanu</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/22.jpg" class="img-responsive img-circle" alt="">
                        <h4>Lynda Cheluget</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/ogendo.jpg" class="img-responsive img-circle" alt="">
                        <h4>Steve Ogendo</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/21.jpg" class="img-responsive img-circle" alt="">
                        <h4>Edith Chirchir</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/21.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kevin Kiplimo</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/21.jpg" class="img-responsive img-circle" alt="">
                        <h4>Bismark Momanyi</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>		

		<div class="footer-section">
						<div class="container">
							<div class="footer-top">
						<p>Knowldge Labs</p>
									</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>

</body>
</php> 