<?php get_header(); ?>

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

  <!-- Content
  ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">

        <!-- Posts
        ============================================= -->
        <div id="posts" class="small-thumbs">

          <!-- the loop -->
          <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

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
                  <p><?php the_excerpt();?></p>
                  <a href="<?php the_permalink(); ?>">View More</a>
                </div>

              </div>

          <?php endwhile; ?>
          <!-- end of the loop -->

          <?php wp_reset_postdata(); ?>

          <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div><!-- portfolio end -->

      </div> <!-- container end -->

    </div> <!-- content-wrap end -->

  </section>

<?php get_footer(); ?>
