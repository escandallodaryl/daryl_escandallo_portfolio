<!--?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?-->
<!--?php if ( is_front_page() ) { get_includes('middle'); }?-->
<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<title><?php //echo get_bloginfo('name');?></title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/hamburgers.min.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/rslides.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/skitter.styles.min.css" type="text/css" media="all"  >
	<link rel="stylesheet" href="css/animate.min.css">

</head>
	<body>
		<div class="protect-me">
		<div class="clearfix">

		<main>
			<div class="wrapper">
				<div class="main_holder">
					<div class="main_header">

						<div class="main_flex">
							<div class="logo">
								<a href="#"><figure><img src="images/logo.png" alt=""></figure></a>
							</div>
							<div class="main_nav">
								<button class="tablink" onclick="mainNav('Home', this, '#000')" id="defaultOpen">HOME</button>
								<button class="tablink" onclick="mainNav('About', this, '#000')">ABOUT</button>
								<button class="tablink" onclick="mainNav('Skills', this, '#000')">SKILLS</button>
								<button class="tablink" onclick="mainNav('Contact', this, '#000')">CONTACT</button> 
							</div>
						</div>

						<div class="main_tab">

							<div id="Home" class="tabcontent">
										<div class="home_holder">
											<div class="social_media">
												<ul>
													<li><a href="#"><figure><img src="images/icons/gmail-icon.png" alt="Google Email"></figure></a></li>
													<li><a href="#"><figure><img src="images/icons/insta-icon.png" alt="Instagram"></figure></a></li>
													<li><a href="#"><figure><img src="images/icons/link-icon.png" alt="Linkedin"></figure></a></li>
												</ul>
											</div>

											<div class="main_content">
												<small>Hello everyone, I'm</small>
												<h1>Daryl Escandallo
													<span>Front End Developer</span>
												</h1>
												<div class="mcb">
													<a href="contact.php">Get In Touch</a>
													<a href="project.php">Projects</a>
												</div>
											</div>
										</div>
								</div>

								<div id="About" class="tabcontent">

									<div class="about">
										<div class="wrapper">
											<div class="about_holder">
												<div class="about_content">
													<h1>Front End <span>Web Developer</span></h1>
													<p>Hello everyone, I'm Daryl Escandallo, a dedicated front-end developer with a passion for  crafting intuitive and visually stunning web interfaces. I specialize in HTML, CSS, and JavaScript. My focus is on creating responsive, user-friendly websites that provide an exceptional user experience across all devices. With a strong eye for  detail and a commitment to staying current with industry trends, I trive to bring creativity and technical excellence to every project I undertake.</p>
												</div>
												<figure class="profile"><img src="images/profile.jpg" alt="Daryl Escandallo"></figure>
											</div>
										</div>
									</div>

								</div>

								<div id="Skills" class="tabcontent">

									<div class="skills_holder">
										<div class="skills_logo">
											<h1 class="skills_heading">Skills</h1>
											<ul>
												<li><figure><img src="images/icons/html-icon.png" alt="html"></figure></li>
												<li><figure><img src="images/icons/js-icon.png" alt="js"></figure></li>
												<li><figure><img src="images/icons/wordpress-icon.png" alt="wordpress"></figure></li>
												<li><figure><img src="images/icons/php-icon.png" alt="php"></figure></li>
											</ul>
										</div>
									</div>

								</div>

								<div id="Contact" class="tabcontent">
										<div class="contact_holder">
											<h1 class="contact_heading">Get In Touch</div>
										</div>
								</div>
						</div>

					</div>
				</div>
			</div>
		</main>



</div>

<!--Footer -->
	<span class="back_top"></span>

  </div> <!-- End Clearfix -->
  </div> <!-- End Protect Me -->

  <!--?php get_includes('ie');?-->

  <!--
  Solved HTML5 & CSS IE Issues
  -->
  <script src="js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="js/jquery-3.5.0.min.js"></script>
  <script src="js/jquery-migrate-1.4.1.min.js"></script>

  <!--
  Solved Psuedo Elements IE Issues
  -->
  <script src="js/calcheight.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.skitter.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/wow.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!--?php wp_footer(); ?-->
</body>
</html>
<!-- End Footer -->
