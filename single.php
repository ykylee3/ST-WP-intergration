
<!-- This is the template for single post pages-->

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
        <h2>Articles</h2>
      </div>

      <div class="container">
          <div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/content', get_post_format() );

						?>
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12" role="document">
							<div class="article-content">
								<div class="article-title">
									<h5 class="art-title"><?php the_title(); ?></h5>
								</div>
								<div class="article-body">
									<div class="italics">
									<p class="art-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
							   	</div>
									<p class="art-subtitle"><?php the_content(); ?></p>
								</div>
							</div>
						</div>

						<?php
							endwhile; // End of the loop.
						?>

						<?php get_sidebar();?>

        </div>
      </div>
<?php get_footer();?>
