<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Posts
			============================================= -->
			<div id="posts" class="small-thumbs">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="entry clearfix">
					<div class="entry-image">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="entry-c">
						<div class="entry-title">
							<h2><?php the_title() ?></h2>
						</div>
					</div>
					<div class="entry-content">
						<p><?php the_content(); ?></p>
					</div>
				</div>

				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div> <!-- posts end -->

		</div> <!-- container end -->

	</div> <!-- content end -->

</section>

<?php get_footer(); ?>
