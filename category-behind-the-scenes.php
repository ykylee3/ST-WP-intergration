<!-- This is the template for category Behind The Scene-->

<?php get_header(); ?>

<!-- Banner -->
      <header class="banner2 color1">
        <div class="container-fluid">
          <div class="row">
            <div id="particles-js"></div>
          </div>
        </div>
      </header>

      <div class="container" id="articlehead">
        <h2>Behind The Scenes</h2>
      </div>

      <div class="container gallery-container">
        <div class="gallery">
          <div class="row">

            <!-- php loop for posting blogs -->
            <?php
            // variables defined
            $args = array(
              'post_type' => 'post',
              'post_per_page' => 8,
              'category_name' => 'behind-the-scenes'
            );

            $wp_query = new WP_Query ( $args );

            if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h3 class="page-description text-center"><?php the_title(); ?></h3>
              <!-- meta data about the author and date of posting -->
              <h6 class="post-meta">Posted on <?php the_time('F j, Y'); ?></h6>
              <div class="g-content">
                <?php the_content(); ?>
              </div>
            </div>


            <!-- php function call end  -->

          <?php endwhile; else: ?>
            <p>Sorry no posts yet.</p>
          <?php endif; ?>

        </div>
      </div>
      </div>


<?php get_footer();?>
