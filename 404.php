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
<div class="text-white container" id="articlehead">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'startrekeire' ); ?></h1>
		</header><!-- .page-header -->
		<div class="page-content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'startrekeire' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->
</div>

<?php get_footer();
