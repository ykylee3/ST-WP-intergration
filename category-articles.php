<!-- This is the template for category Articles -->

<?php get_header(); ?>

<!-- Banner -->
<header class="banner2 color3">
  <div class="container-fluid">
    <div class="row">
      <div id="particles-js"></div>
    </div>
  </div>
</header>

<div class="container" id="articlehead">
  <h2>Articles</h2>
</div>

<!-- Article section begins here -->
<div class="article">
  <div class="container">
    <div class="row">
    <div class="text-white col-lg-10 col-md-10 col-sm-12 col-xs-12">
      <div class="container-fluid">
        <div class="row">
      <!-- php loop for posting blogs -->
      <?php

      // variables defined
      $args = array(
        'post_type' => 'post',
        'post_per_page' => 8,
        'category_name' => 'articles'
      );

      $wp_query = new WP_Query ( $args );

      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();

      ?>

      <!-- container displaying the blogs -->
      <div class="text-white custom_col col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <!-- the title of the blog -->
        <h5 class="post-title"><?php the_title(); ?></h5>
        <!-- meta data about the author and date of posting -->
        <h6 class="text-white post-meta">Posted by <?php the_author_posts_link(); ?></h6>
        <h6 class="text-white post-meta"><?php the_time('F j, Y'); ?></h6>
        <!-- the excerpt of th blog to be displayed -->
        <div class="post-subtitle"><?php the_excerpt(); ?></div>


        <!-- Button trigger modal -->
        <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-primary btn-sm" >Read More</button>

        <div class="modal fade" id="<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="text-black modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modaltitle"><?php the_title(); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="italic">
                  <p class="post-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
                </div>
          <p class="post-subtitle"><?php the_content(); ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
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
</div>
<!-- php footer function -->
<?php get_footer(); ?>
