<?php get_header(); ?>

<div class="jumbotron">
  <div class="container">
    <div class="img-fluid mx-auto d-block text-center" id="logo">
      <img class="logoimg animated fadeInUp" src="<?php echo get_template_directory_uri();?>/assets/STE_logo_201216.png">
    </div>
  </div>
</div>

<div class="firstrow">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/spock.jpg" alt="spock"></img>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="startrek_index">
          <h1 class="index_title"><a href="about.html">Star Trek Éire</a></h1>
          <p>Star Trek Eire is a not for profit group of Star Trek fans based in Ireland.
            Our aim is to bring the universe of Star Trek to new and old
            fans through events, screenings, our website, Facebook page
            and Twitter account.</p>
            <p><a class="btn btn-primary" href="#" role="button" style="background: #5d5d5d; border-color: #5d5d5d">Learn more</a></p>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="clubhouse">
            <h1 class="index_title"><a href="about.html">The Clubhouse</a></h1>
            <p>The clubhouse is our charity partner.</p>
            <p><a class="btn btn-primary" href="#" role="button" style="background: #5d5d5d; border-color: #5d5d5d">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="secondrow">
    <div class="container">
      <div class="row">
        <div class="events_index col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <h2>Events</h2>
          <div class="container">
            <div class="eventswidget">
              <!-- php loop for posting blogs -->
              <?php
              // variables defined
              $args = array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'category_name' => 'events'
              );

              $wp_query = new WP_Query ( $args );

              if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>

              <div class="">
                <h3>
                  <?php the_title(); ?>
                </h3>
                <!-- meta data about the  date of posting -->
                <h6 class="post-meta">Posted on <?php the_time('F j, Y'); ?></h6>
                <!-- the excerpt of th blog to be displayed -->
                <div class="post-subtitle"><?php the_excerpt(); ?></div>
                <!-- Button link to full article -->
                <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-primary btn-sm" >Read More</button>
                </div>
                <!-- php function call end  -->
              <?php endwhile; else: ?>
                <p>Sorry no posts yet.</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <h2>Gallery</h2>
          <div class="container">
            <div class="gallerywidget gallery">
              <!-- php loop for posting gallery posts -->
              <?php
              // variables defined
              $args = array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'category_name' => 'media-gallery'
              );

              $wp_query = new WP_Query ( $args );

              if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>
              <h3 class="page-description text-center"><?php the_title(); ?></h3>
              <!-- meta data about the author and date of posting -->
              <h6 class="post-meta">Posted on <?php the_time('F j, Y'); ?></h6>
              <div class="g-content">
                <?php the_content(); ?>
              </div>
              <?php

              // wp_reset_query();
            endwhile; else: ?>
            <p>Sorry no posts yet.</p>
          <?php endif; ?>
          <!-- php function call end  -->
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <h2>Twitter</h2>
      <div class="twitter">
        <div class="container">
          <a class="twitter-timeline" href="https://twitter.com/startrekeire?ref_src=twsrc%5Etfw" data-chrome="nofooter noheader" data-theme="dark" data-height="400">Tweets by startrekeire</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<section class="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="crew col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="text"><p>The Crew</p></div>

      </div>
      <div class="crew col-lg-1 col-md-1 hidden-xl-up"></div>
      <div class="crew col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <!-- <div class="square"><p>Member</p></div> -->
        <div class="text"><p>Ronan</p></div>
        <img class="img-fluid" id="img_crew" src="<?php echo get_template_directory_uri();?>/assets/spock.jpg" alt="spock"></img>
      </div>
      <div class="crew col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <!-- <div class="square"><p>Member</p></div> -->
        <div class="text"><p>Gary</p></div>
        <img class="img-fluid" id="img_crew" src="<?php echo get_template_directory_uri();?>/assets/spock.jpg" alt="spock"></img>
      </div>
      <div class="crew col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <!-- <div class="square"><p>Member</p></div> -->
        <div class="text"><p>Shane</p></div>
        <img class="img-fluid" id="img_crew" src="<?php echo get_template_directory_uri();?>/assets/spock.jpg" alt="spock"></img>
      </div>
      <div class="crew col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <!-- <div class="square"><p>Member</p></div> -->
        <div class="text"><p>Darryn</p></div>
        <img class="img-fluid" id="img_crew" src="<?php echo get_template_directory_uri();?>/assets/spock.jpg" alt="spock"></img>
      </div>
      <div class="crew col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <!-- <div class="square"><p>Member</p></div> -->
        <div class="text"><p>Ciarán</p></div>
        <img class="img-fluid" id="img_crew" src="<?php echo get_template_directory_uri();?>/assets/spock.jpg" alt="spock"></img>
      </div>
      <div class="crew col-lg-1 col-md-1 hidden-xl-up"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
