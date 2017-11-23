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

				</div> <!-- container wrap end -->

		</section> <!-- content end -->

<?php get_footer(); ?>
