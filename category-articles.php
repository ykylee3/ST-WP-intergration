<!-- This is the template for category Articles -->

<?php get_header(); ?>

<!-- Banner -->
<header class="banner2 color2">
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
<section class="article">
  <div class="container">
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
      <div class="custom_col col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <!-- the title of the blog -->
        <h5 class="post-title"><?php the_title(); ?></h5>
        <!-- meta data about the author and date of posting -->
        <h6 class="post-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></h6>
        <!-- the excerpt of th blog to be displayed -->
        <p class="post-subtitle"><?php the_excerpt(); ?></p>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?php echo get_the_ID(); ?>">Read More</button>

        <div class="modal fade" id="<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
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

    <div id="widgetarea" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 sidebar-module">
        <?php get_sidebar(); ?>
    </div>

  </div>
</div>
</section>



<!-- php footer function -->
<?php get_footer(); ?>
