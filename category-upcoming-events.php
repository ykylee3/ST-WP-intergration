<!-- Upcoming Events category template -->

<!-- header template -->
<?php get_header(); ?>

<!-- Main Banner -->
<header class="banner2 color5">
  <div class="container-fluid">
    <div class="row">
      <div id="particles-js"></div>
    </div>
  </div>
</header>

<!-- articles page area -->
<div class="container" id="articlehead">
  <h2>Upcoming Events</h2>
</div>
 
<!-- posts template -->
<div class="container">
  <div class="events row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
      <div class="container-fluid">
        <div class="row">
<!-- php loop for posting blogs -->
      <?php
      // variables defined
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'category_name' => 'upcoming-events'
      );

      $wp_query = new WP_Query ( $args );

      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
      ?>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </h2>

        <!-- meta data about the author and date of posting -->
        <h6 class="post-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></h6>

        <div class="content">
          <?php the_content(); ?>
        </div>
      </div>


      <!-- php function call end  -->

    <?php endwhile; else: ?>
      <p>Sorry no posts yet.</p>
    <?php endif; ?>
  </div></div>
  </div>
<?php get_sidebar(); ?>
</div>
</div>
<!-- php footer function -->
<?php get_footer(); ?>
