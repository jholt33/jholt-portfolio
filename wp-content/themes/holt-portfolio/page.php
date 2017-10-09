<?php get_header(); ?>

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

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>

					<?php endif; ?>

				</div> <!-- container end -->

			</div> <!-- content-wrap end -->

		</section> <!-- content end -->

<?php get_footer(); ?>
