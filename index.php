<?php 
/* ==========================================================================
   index.php

   main template
   ========================================================================== */
?>
<?php 
/* load header */ 
get_header();
?>

<div class="container-fluid text-center">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1><?php _e( 'My thoughts on and off the web.', 'foundstrap' ); ?></h1>
				<p class="lead">
					<?php _e( 'Web-design, development, and parent-teacher conferences.', 'foundstrap' ); ?>
				</p>
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end jumbotron -->
</div> <!-- end container-fluid -->

<div class="page-blog container-fluid">
	<div class="row">
		<aside class="sidebar col-md-3 col-md-offset-1 col-md-push-8">
			sidebar here
		</aside>

		<div class="posts col-md-8 col-md-pull-4">
			<div class="row">
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;

                    else :
                    	get_template_part( 'content', 'none' );
                    endif;
				?>
			</div>
		</div>
	</div> <!-- end row -->
</div> <!-- end container-fluid -->