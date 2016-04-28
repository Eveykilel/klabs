<!DOCTYPE php>
<php>
<head>
<title>Klabs</title>
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/agency.css" rel="stylesheet" type="text/css" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
									<li><a href="<?php echo base_url();?>index.php/services">Services</a></li>
										<li><a href="<?php echo base_url();?>index.php/portfolio">Portfolio</a></li>
											<li><a href="<?php echo base_url();?>index.php/blog">Blog</a></li>
												<li><a href="<?php echo base_url();?>index.php/contact" class="active">Contact</a></li>
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
		<!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
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