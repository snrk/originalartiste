<?php get_header(); ?>
	<div class="allproj">
	<?php wp_reset_postdata(); ?>
		<?php query_posts($query_string . '&cat=-47'); ?>
		<?php if(have_posts()):
			while(have_posts()):
				the_post(); ?>
   		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    		<a href="<?php the_permalink(); ?>"><h1 class="titre"><?php the_title(); ?></h1></a>
    	</article>
    	<?php endwhile;endif; ?>
		<a class="exit-off-canvas">
	</div>
<?php get_footer(); ?>