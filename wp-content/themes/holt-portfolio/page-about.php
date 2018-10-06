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

						<div class="row common-height clearfix">

							<!-- <div class="col-sm-5 col-padding" style="background: url('/wp-content/themes/holt-portfolio/images/team/3.jpg') center center no-repeat; background-size: cover;"></div> -->

							<div class="col-12 col-padding">
								<div>
									<div class="heading-block">
										<span class="before-heading color">Webmaster / Front End Developer</span>
										<h3>Jeremy Holt</h3>
									</div>

									<div class="row clearfix">

										<div class="col-md-6">
											<p>Holt has lent his talents to the publishing industry as well as independent design houses and large tech companies where he filled a dual role as website admin and web developer. He currently holds a degree in multimedia technology and is certified in web media, making him a digital force to be reckoned with.</p><p>He has become very knowledgeable and highly skilled over the years, in a wide range of languages and standards for coding and building web experiences for users. Jeremy is constantly learning, growing and finding better / more efficiant ways to build the internet.</p>
											<a href="https://github.com/jholt33" target="_blank" class="social-icon inline-block si-small si-light si-rounded si-github">
							          <i class="icon-github"></i>
							          <i class="icon-github"></i>
							        </a>
							        <a href="https://www.linkedin.com/in/jeremy-holt-7742b610" target="_blank" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
							          <i class="icon-linkedin"></i>
							          <i class="icon-linkedin"></i>
							        </a>
										</div>

										<div class="col-md-6">
											<ul class="skills">
												<li data-percent="100">
													<span>HTML</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="100">
													<span>CSS</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="80">
													<span>jQuery</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="90">
													<span>Wordpress</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
												<li data-percent="70">
													<span>PHP</span>
													<div class="progress">
														<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
													</div>
												</li>
											</ul>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div> <!-- container wrap end -->

		</section> <!-- content end -->

<?php get_footer(); ?>
