<!DOCTYPE php>
<php>
<head>
<title>Klabs</title>
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url();?>css/agency.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
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


<!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

 
</head>
<body>
<!--header-banner-->
		<div class="header head-top">
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
						<li><a href="<?php echo base_url();?>">Home</a></li>
								<li><a href="<?php echo base_url();?>index.php/about">About</a></li>
									<li><a href="<?php echo base_url();?>index.php/services" class="active">Services</a></li>
										<li><a href="<?php echo base_url();?>index.php/portfolio">Portfolio</a></li>
											<li><a href="<?php echo base_url();?>index.php/blog">Blog</a></li>
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
			</div>
		</div>
		<!-- Services Section -->
	    <section id="services">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2 class="section-heading">Services</h2>
	                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
	                </div>
	            </div>
	            <div class="row text-center">
	                <div class="col-md-4">
	                    <span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
	                    </span>
	                    <h4 class="service-heading">E-Commerce</h4>
	                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
	                </div>
	                <div class="col-md-4">
	                    <span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
	                    </span>
	                    <h4 class="service-heading">Responsive Design</h4>
	                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
	                </div>
	                <div class="col-md-4">
	                    <span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
	                    </span>
	                    <h4 class="service-heading">Web Security</h4>
	                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
	                </div>
	            </div>
	        </div>
	    </section>





		<div class="footer-section">
						<div class="container">
							<div class="footer-top">
						<p>Knowledge Labs</p>
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