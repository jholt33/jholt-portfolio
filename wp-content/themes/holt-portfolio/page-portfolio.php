<?php

/*
*
Template Name: Portfolio Page
*
*/

get_header(); ?>

		<!-- Page Title -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php the_title() ?></h1>
				<span><?php the_field( 'subtitle' ); ?></span>
				<ol class="breadcrumb">
					<li><a href="<?php bloginfo('url');?>">Home</a></li>
					<li class="active">Portfolio</li>
				</ol>
			</div>

		</section><!-- page-title end -->

		<!-- Content
	  ============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix">

						<?php

							 $args = array(
								'post_type'      => 'portfolio',
								'posts_per_page' => '20',
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

				</div> <!-- container end -->

			</div> <!-- content-wrap end -->

		</section>

<?php get_footer(); ?>
