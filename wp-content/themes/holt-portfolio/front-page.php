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

			<div class="content-wrap notoppadding">

				<div class="container clearfix">

					<div class="heading-block center topmargin">
						<i class="fa fa-3x fa-briefcase" aria-hidden="true"></i>
						<h3>Portfolio</h3>
						<span>Websites I've build and/or contributed to</span>
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

		</section> <!-- content end -->

<?php get_footer(); ?>
