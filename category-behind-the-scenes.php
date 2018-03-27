<!-- Behind The Scenes category template-->

<?php get_header(); ?>

<!-- Main page banner -->
      <header class="banner2 color1">
        <div class="container-fluid">
          <div class="row">
            <div id="particles-js" aria-hidden="true"></div>
          </div>
        </div>
      </header>

<!-- content area -->
<div class="container" id="articlehead">
	<h2>Behind The Scenes</h2>
</div>

<!-- posts template -->
<div class="text-white container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
      <div class="container-fluid">
        <div class="row">
<!-- php loop for posting blogs -->
      <?php
      // variables defined
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'category_name' => 'behind-the-scenes'
      );

      $wp_query = new WP_Query ( $args );

      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
      ?>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>
          <?php the_title(); ?>
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
