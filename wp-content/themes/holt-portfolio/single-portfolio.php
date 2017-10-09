<?php get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?php the_title() ?></h1>
		<div id="portfolio-navigation">
			<?php next_post_link( '%link', '<i class="icon-angle-left"></i>' ); ?>
			<a href="<?php bloginfo('url'); ?>/?p=5"><i class="icon-line-grid"></i></a>
			<?php previous_post_link( '%link', '<i class="icon-angle-right"></i>' ); ?>
		</div>
	</div>

</section><!-- page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Portfolio Single Gallery
			============================================= -->
			<div class="col_two_third portfolio-single-image nobottommargin" class="fadeInLeft animated" data-animate="fadeInLeft">
				<div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
					<div class="flexslider">
						<div class="slider-wrap">
							<div class="slide">
								<?php $image = get_field( 'image' ); ?>
								<?php if ( $image ) { ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- portfolio-single-image end -->

			<!-- Portfolio Single Content
			============================================= -->
			<div class="col_one_third portfolio-single-content col_last nobottommargin" class="fadeInRight animated" data-animate="fadeInRight">

				<!-- Portfolio Single - Description
				============================================= -->
				<div class="fancy-title title-bottom-border">
					<h2>Project Info:</h2>
				</div>
				<p><?php the_field( 'project_description' ); ?></p>
				<!-- Portfolio Single - Description End -->

				<div class="line"></div>

				<!-- Portfolio Single - Meta
				============================================= -->
				<ul class="portfolio-meta bottommargin">
					<li><span><i class="icon-calendar3"></i>Completed on:</span> <?php the_field( 'completed_on' ); ?></li>
					<li><span><i class="icon-link"></i>URL:</span> <a href="<?php the_field( 'client' ); ?>" target="_blank"><?php the_field( 'client' ); ?></a></li>
				</ul>
				<!-- Portfolio Single - Meta End -->


			</div><!-- .portfolio-single-content end -->

			<div class="clear"></div>

			<div class="divider divider-center"><i class="icon-circle"></i></div>

			<!-- Related Portfolio Items
			============================================= -->
			<h4>Related Projects:</h4>

			<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">

				<?php

					 $args = array(
						'post_type'      => 'portfolio',
						'posts_per_page' => '12',
						'orderby'   		 => 'rand',
						'post__not_in' => array( $post->ID ),
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

	</div> <!-- content wrap end -->

</section>

<?php get_footer(); ?>
