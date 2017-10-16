<?php get_header(); ?>

		<section id="slider" class="slider-parallax swiper_wrapper clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_directory');?>/images/slider/swiper/italy.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Some Sweet Title</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="<?php bloginfo('template_directory');?>/images/videos/explore.jpg" preload="auto" loop autoplay muted>
									<source src='<?php bloginfo('template_directory');?>/images/videos/explore.mp4' type='video/mp4' />
									<source src='<?php bloginfo('template_directory');?>/images/videos/explore.webm' type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('<?php bloginfo('template_directory');?>/images/slider/swiper/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-md-6">

							<h3>Objective</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et, dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur ipsum libero quaerat, nam. Ad, sunt, error!</p>

						</div>

						<div class="col-md-6">

							<h3>Future Endaevours</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et, dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur ipsum libero quaerat, nam. Ad, sunt, error!</p>

						</div>

					</div>

				</div>

				<div class="section parallax dark bottommargin-lg" style="background-image: url('<?php bloginfo('template_directory');?>/images/slider/swiper/sky-ocean.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.3">

					<div class="container clearfix">

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
							<i class="i-plain i-large divcenter nobottommargin icon-time"></i>
							<div class="counter counter-lined"><span data-from="10" data-to="80" data-refresh-interval="50" data-speed="4000" data-comma="true"></span>+</div>
							<h5>Hours per Week</h5>
						</div>

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
							<i class="i-plain i-large divcenter nobottommargin icon-code"></i>
							<div class="counter counter-lined"><span data-from="100" data-to="25841" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div>
							<h5>Lines of Code</h5>
						</div>

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
							<i class="i-plain i-large divcenter nobottommargin icon-briefcase"></i>
							<div class="counter counter-lined"><span data-from="100" data-to="923" data-refresh-interval="50" data-speed="3500" data-comma="true"></span></div>
							<h5>Projects Completed</h5>
						</div>

						<div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
							<i class="i-plain i-large divcenter nobottommargin icon-dribbble2"></i>
							<div class="counter counter-lined"><span data-from="25" data-to="214" data-refresh-interval="30" data-speed="2700" data-comma="true"></span></div>
							<h5>Shots on Dribbble</h5>
						</div>

					</div>

				</div>

				<div class="container clearfix">

					<div class="heading-block center">
						<h3>Some of my Projects</h3>
						<span>Awesome Works that I've contributed to.</span>
					</div>

					<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="5">

						<?php

							 $args = array(
								'post_type'      => 'portfolio',
								'posts_per_page' => '20',
								'post_status'    => 'publish',

							 );
							 $category_posts = new WP_Query($args);

							 if($category_posts->have_posts()) :
									while($category_posts->have_posts()) :
										 $category_posts->the_post();
						?>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
										<?php the_post_thumbnail(); ?>
									<div class="portfolio-overlay">
										<a href="<?php the_permalink(); ?>" class="center-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
							</div>
						</div>

						<?php
									endwhile;
							 else:
						?>

									Oops, there are no posts.

						<?php
							 endif;
						?>

					</div> <!-- featured work end -->

				</div> <!-- container end -->

		</section> <!-- content end -->

<?php get_footer(); ?>
