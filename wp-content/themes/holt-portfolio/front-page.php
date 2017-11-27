<?php get_header(); ?>

		<section id="slider" class="slider-parallax swiper_wrapper clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_directory');?>/images/slider/swiper/urad.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome!</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">My name is Jeremy Holt. I am a Front-End Developer currently residing in Mesa, AZ. I have over 11 years experience coding and developing websites using some of the latest front-end technology.</p>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- <div class="center"><i class="fa fa-5x fa-briefcase" aria-hidden="true"></i></div> -->

					<div class="fancy-title title-dotted-border title-center">
						<h3>Front-End Web Development Projects</h3>
					</div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-4 clearfix">

						<?php

							 $args = array(
								'post_type'      => 'portfolio',
								'posts_per_page' => '12',
								'orderby'   		 => 'rand',
								'post_status'    => 'publish',

							 );
							 $category_posts = new WP_Query($args);

							 if($category_posts->have_posts()) :
									while($category_posts->have_posts()) :
										 $category_posts->the_post();
						?>

						<article class="portfolio-item pf-media pf-icons">

							<div class="portfolio-image">
									<?php the_post_thumbnail(); ?>
								<div class="portfolio-overlay">
									<a href="<?php the_permalink(); ?>" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
								<span><?php user_the_categories(); ?></span>
							</div>

						</article>

						<?php endwhile; else: ?>

							<p>Oops, there are no portfolio items.</p>

						<?php endif; ?>

					</div><!-- portfolio end -->

					<div class="center topmargin-lg"><a href="/projects" class="button button-desc button-border button-rounded center">View More</a></div>


				</div> <!-- container end -->

			</div> <!-- container wrap end -->

			<div class="promo promo-full promo-border header-stick bottommargin-lg">
				<div class="container clearfix">
					<h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span></h3>
					<span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
					<a href="#" class="button button-reveal button-xlarge button-rounded tright"><i class="icon-angle-right"></i><span>Browse Now</span></a>
				</div>
			</div>

		</section> <!-- content end -->

<?php get_footer(); ?>
