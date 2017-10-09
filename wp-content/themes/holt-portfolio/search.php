<?php get_header(); ?>

    <?php
        global $query_string;
        $query_args = explode("&", $query_string);
        $search_query = array();

        foreach($query_args as $key => $string) {
          $query_split = explode("=", $string);
          $search_query[$query_split[0]] = urldecode($query_split[1]);
        } // foreach

        $the_query = new WP_Query($search_query);
        if ( $the_query->have_posts() ) :
    ?>

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Search Results</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="small-thumbs">

            <!-- loop start -->

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
								</div>
							</div>
							<div class="entry-content">
								<p><?php the_field( 'project_description' ); ?></p>
								<a href="<?php the_permalink(); ?>">View More</a>
							</div>
						</div>

    				<?php endwhile; ?>
    				<!-- end of the loop -->

    				    <?php wp_reset_postdata(); ?>

    				<?php else : ?>
    					<!-- Page Title
    					============================================= -->
    					  <section id="page-title">

    						<div class="container clearfix">
    							<h1>Sorry, no posts matched your criteria. Try again.</h1>
    						</div>

    					  </section><!-- page-title end -->

    				<?php endif; ?>

          </div> <!-- posts end -->

		    </div> <!-- container end -->

    </section>

<?php get_footer(); ?>
