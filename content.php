<?php 
/* ==========================================================================
   content.php

   The default template for displaying content
   ========================================================================== */
?>
<!-- Post -->
<div id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-6' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumbnail">
			<?php // the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
		</a>
	<?php endif; ?>

	<article class="post-excerpt">
		<header>
			<!-- <a href="#"><h3>Lorem Ipsum</h3></a> -->
			<p class="post-meta">
				by <a href="#">Cory Simmons</a> on <span>November 15th, 2014</span>
			</p>
			<?php 
				// Display the title in a link
				echo '<a href="' . get_the_permalink() . '"><h3>' . get_the_title(). '</h3></a>';
			?>
		</header>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis explicabo aperiam veritatis necessitatibus nemo dolore consequatur fugit, non sapiente tempore, commodi voluptatem libero, quae repudiandae pariatur totam voluptatum officia aliquid?
		</p>
	</article>
</div>
<!-- /.post -->