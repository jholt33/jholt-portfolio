<?php

/*
*
Template Name: About
*
*/

get_header(); ?>

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php the_title() ?></h1>
				<span><?php the_field( 'page_subtitle' ); ?></span>
				<ol class="breadcrumb">
					<li><a href="<?php bloginfo('url');?>">Home</a></li>
					<li><?php the_title();?></li>
				</ol>
			</div>

		</section><!-- page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

						<div class="container clearfix">

							<div class="row clearfix">

								<div class="col-md-6 topmargin bottommargin">

									<center><i class="fa fa-3x fa-code" aria-hidden="true"></i></center>

									<div class="heading-block fancy-title nobottomborder title-bottom-border">

									<h4 class="center">Skills</h4>

									</div>

									<p>Over 11 years experience with a broad range of tools, technologies, and platforms for front-end development including: WordPress, WordPress plugins, eCommerce platforms, Drupal, CDNs, hosting platforms, FTP clients, hand-coding webpages from scratch, front-end frameworks, Bootstrap, MySQL databases, IDE Editors, terminal commands, Dreamweaver, Photoshop, Illustrator, MAMP, WP Engine, Github, Gulp/Grunt build tools, Cloudflare, MailChimp, Cpanel, and Google Analytics; both Mac and PC savvy. Highly skilled in responsive layout, design, semantic code, browser compatibility testing and the latest web languages including: HTML5, CSS3, LESS/SASS, JavaScript/jQuery and PHP.</p>

								</div>

								<div class="col-md-6 topmargin bottommargin">

									<center><i class="fa fa-3x fa-fighter-jet" aria-hidden="true"></i></center>

									<div class="heading-block fancy-title nobottomborder title-bottom-border">

									<h4 class="center">Experience</h4>

									</div>

									<p>Holt has lent his talents to the publishing industry as well as independent design houses and large tech companies where he filled a dual role as website admin and web developer. He currently holds a degree in multimedia technology and is certified in web media, making him a digital force to be reckoned with.</p><p>He has become very knowledgeable and highly skilled, over the years, in a wide range of languages and standards for coding and building web experiences for users. Jeremy is constantly learning, growing and finding better / more effiecant ways to build the internet.</p>

								</div>

							</div>

						</div> <!-- container end -->

						<div class="row common-height clearfix">

							<div class="col-sm-5 col-padding" style="background: url('images/team/3.jpg') center center no-repeat; background-size: cover;"></div>

							<div class="col-sm-7 col-padding">
								<div>
									<div class="heading-block">
										<span class="before-heading color">CEO &amp; Co-Founder</span>
										<h3>John Doe</h3>
									</div>

									<div class="row clearfix">

										<div class="col-md-6">
											<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
											<p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
											<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
												<i class="icon-gplus"></i>
												<i class="icon-gplus"></i>
											</a>
										</div>

										<div class="col-md-6">
											<ul class="skills">
												<li data-percent="80">
													<span>Wordpress</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="60">
													<span>CSS3</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="90">
													<span>HTML5</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="70">
													<span>jQuery</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="85">
													<span>Ruby</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="85" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
											</ul>
										</div>

									</div>

								</div>
							</div>

						</div>

				</div> <!-- container wrap end -->

		</section> <!-- content end -->

<?php get_footer(); ?>
