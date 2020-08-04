<?php
/*
Template Name: Page for Resume 
*/
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo get_template_directory_uri().'/logo.png' ?>" type="image/png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="logo.png"> 
	<title>Personal resume</title>
        
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="<?php echo get_template_directory_uri().'/assets/fontawesome/js/all.min.js'; ?>"></script>
       
	<!-- Theme CSS doesn't need since I link it in functions-->  
    <!-- <link id="theme-style" rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/pillar-2.css' ?>"> -->

    <!--========== All Scripts =================-->
    <?php wp_head() ?> 
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
				<!-- Brand and toggle get grouped for better mobile display -->
				<!-- Question to D href="index.html" -->
                <a class="navbar-brand logo_h" href="#"><img src="<?php echo get_template_directory_uri().'/logo.png' ?>" alt="pic logo"></a>
			<!-- Don't anderstand what this code does" -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
			<!-- END Don't anderstand what this code does" -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <?php wp_nav_menu( [
                        'theme_location'  => '',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav menu_nav ml-auto">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );; ?>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area Ended =================-->



        <section class="home_banner_area">
           	
			<div class="header-intro header-intro-resume theme-bg-primary text-white py-1 ">
					<div class="container position-relative ">
						<h2 class="page-heading mb-1 text-center">Resume</h2>
						<a class="btn theme-btn-on-bg download-resume position-absolute font-weight-bold mx-auto" href="https://themes.3rdwavemedia.com/resources/sketch-template/pillar-sketch-sketch-resume-template-for-developers/" target="_blank"><i class="fas fa-download mr-3"></i>Download PDF Version</a>
	        		</div><!--//container-->
        		</div><!--//header-intro-->
			   
			   <div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media"> 
                            <!-- Resume section -->
							<article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="media flex-column flex-md-row">
				    <img class="mr-3 img-fluid picture mx-auto" src="<?php echo get_template_directory_uri().'/assets/images/1-sm.png' ?>" alt="profile pic">
				    <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
					    <div class="primary-info">
						    <h1 class="name mt-0 mb-1 text-white  text-uppercase">Dmytro Gordiienko</h1>
						    <div class="title mb-3">Software QA Engineer</div>
						    <ul class="list-unstyled">
							    <li class="mb-2"><a href="mailto:dmytro.gordiienko@gmail.com"><i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>dmytro.gordiienko@gmail.com</a></li>
							    <li><a href="tel:+16317456568"><i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i>+1 (631) 745 6568</a></li>
						    </ul>
					    </div><!--//primary-info-->
					    <div class="secondary-info ml-md-auto mt-2">
						    <ul class="resume-social list-unstyled">
				                <li class="mb-3"><a href="https://www.linkedin.com/in/dmytrogordiienko/"><span class="fa-container text-center mr-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin.com/in/dmytrogordiienko</a></li>
				                <li class="mb-3"><a href="https://github.com/dimon41k2010"><span class="fa-container text-center mr-2"><i class="fab fa-github-alt fa-fw"></i></span>github.com/dimon41k2010</a></li>
				                <!-- <li class="mb-3"><a href="#"><span class="fa-container text-center mr-2"><i class="fab fa-codepen fa-fw"></i></span>codepen.io/username/</a></li> -->
				                <li><a href="https://www.dgcoresolution.com/"><span class="fa-container text-center mr-2"><i class="fas fa-globe"></i></span>dgcoresolution.com</a></li>
						    </ul>
					    </div><!--//secondary-info-->
					    
				    </div><!--//media-body-->
			    </div><!--//media-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
				    <div class="resume-section-content">
						<p class="mb-0">• 6+ years of industry experience and formal education in Software Development with emphasis on Quality Assurance.</p>
						<p class="mb-0">• Proficient in manual and automated testing in Java and Python with Selenium WebDriver and using a REST-assured framework.</p>
						<p class="mb-0">• Proven team leader managing with cross-functional and offshore teams.</p>
						<!-- <p class="mb-0">• Well versed in Software Development Life Cycle (SDLC), Software Testing Life Cycle (STLC), test management, bug reporting and data analysis tools.</p> -->
						<p class="mb-0">• Extensive experience in end-to-end, functional, integration, GUI, back-end testing, REST API, cross-browser and cross-platform compatibility testing, as well as business integrity testing.</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row position_location">
										        <h3 class="resume-position-title font-weight-bold mb-1">Senior QA Engineer</h3>
										        <div class="resume-company-name ml-auto">Facebook Inc, Menlo Park, CA </div>
										    </div><!--//row-->
										    <div class="resume-position-time">May, 2018 – Present</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
											<p class="mb-0">• Performing end to end testing in test and production environments.</p>
											<p class="mb-0">• Lead the continuous quality improvement of company’s products with over 8 million of users.</p>
											<p class="mb-0">• Developing 50+ UI functional automation tests for web and mobile native app. (Java/Python/Selenium/JavaScript).</p>
											<p class="mb-0">• Lead new features testing, design and modify test plans to ensure alignment among all cross-functional teams.</p>
											<p class="mb-0">• Debugging, maintaining and improving automation test coverage of end-to-end WebDriver tests. Identifying tests flakiness, false positive signals.</p>
											<p class="mb-0">• Improving benchmark performance testing of the biggest company’s products.</p>
											<p >• Managing QA offshore team (over 20 team members).</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p>NEED TO ADD HERE!!! Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
										    <ul>
											    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
											    <li>At vero eos et accusamus et iusto odio dignissimos.</li>
											    <li>Blanditiis praesentium voluptatum deleniti atque corrupti.</li>
											    <li>Maecenas tempus tellus eget.</li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">php</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">JavaScript</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Python</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">API</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">XCode</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Android Studio</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Senior Software Developer</h3>
										        <div class="resume-company-name ml-auto">Google</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2014 - 2018</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">React</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Redux</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Webpack</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/SASS</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">MySQL</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Co-Founder & Lead Developer</h3>
										        <div class="resume-company-name ml-auto">To-do Lists</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2012 - 2014</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
										    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Django</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">JavaScript</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Node.js</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Require.js</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/SASS</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">Web Developer <small class="text-muted">(Intern)</small></h3>
										        <div class="resume-company-name ml-auto">Amazon</div>
										    </div><!--//row-->
										    <div class="resume-position-time">2011 - 2012</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p>Role description goes here ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">Ruby on Rails</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">jQuery</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">HTML/LESS</span></li>
											    <li class="list-inline-item"><span class="badge badge-primary badge-pill">MongoDB</span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//experience-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Backend</h4>
							        <ul class="list-unstyled">
								        <li class="mb-2">
								            <div class="resume-skill-name">Python/Django</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">Ruby/Rails</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">PHP</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 86%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">WordPress/Shopify</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 82%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2010 - 2011</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2007 - 2010</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 pl-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 pl-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Language</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article>  

						

						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
<?php
get_footer();
?>