<!-- Media Gallery category template -->

<!-- header template -->
<?php get_header(); ?>

<!-- Main page Banner -->
<header class="banner2 color3">
  <div class="container-fluid">
    <div class="row">
      <div id="particles-js" aria-hidden="true"></div>
    </div>
  </div>
</header>

<!-- main content -->
<div class="container" id="articlehead">
  <h2>Media Gallery</h2>
</div>

<!-- content template -->
<div class="container gallery-container">
  <div class="gallery row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
      <div class="container-fluid">
        <div class="row">
          <!-- php loop for posting gallery posts -->
          <?php
          // variables defined
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8,
            'category_name' => 'media-gallery'
          );

          $wp_query = new WP_Query ( $args );

          if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
          ?>

          <div class="custom-gallery col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <h3 class="text-white  page-description text-center"><?php the_title(); ?></h3>
            <!-- meta data about the author and date of posting -->
            <h6 class="text-white  post-meta">Posted on <?php the_time('F j, Y'); ?></h6>
            <div class="text-white g-content">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
