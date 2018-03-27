<?php get_header(); ?>

<!-- Main page banner -->
<header class="banner2 color1">
	<div class="container-fluid">
		<div class="row">
			<div id="particles-js" aria-hidden="true"></div>
		</div>
	</div>
</header>

<div class="container" id="articlehead">
	<h2>Search Results</h2>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
			<div class="container-fluid">
				<div class="row">
					<div class="text-white text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="page-header text-white text-left">
							<?php if ( have_posts() ) : ?>
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'startrekeire' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
								<?php else : ?>
									<h1 class="page-title"><?php _e( 'Nothing Found', 'startrekeire' ); ?></h1>
								<?php endif; ?>
							</div><!-- .page-header -->

							<div id="primary" class="content-area">
								<main id="main" class="site-main" role="main">

									<?php
									if ( have_posts() ) :
										/* Start the Loop */
										while ( have_posts() ) : the_post();
									?>
									<div class="container-fluid">
										<div class="row">
											<div class="text-white text-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<h5 class="post-title"><?php the_title(); ?></h5>
								        <!-- meta data about the author and date of posting -->
								        <h6 class="post-meta">Posted by <?php the_author_posts_link(); ?></h6>
								        <h6 class="post-meta"><?php the_time('F j, Y'); ?></h6>
								        <!-- the excerpt of th blog to be displayed -->
								        <div class="post-subtitle"><?php the_excerpt(); ?></div>
											</div>
										</div>
									</div>

									<?php
									endwhile; // End of the loop.

									the_posts_pagination( array(
										'prev_text' => startrekeire_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'startrekeire' ) . '</span>',
										'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'startrekeire' ) . '</span>' . startrekeire_get_svg( array( 'icon' => 'arrow-right' ) ),
										'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'startrekeire' ) . ' </span>',
									) );

									else : ?>
									<p>
										<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'startrekeire' ); ?>
									</p>
									<?php
								endif;
								?>
							</main><!-- #main -->
						</div><!-- #primary -->
					</div>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
