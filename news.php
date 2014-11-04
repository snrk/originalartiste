<?php /* Template Name: News */ ?>
<?php
define('WP_USE_THEMES', false);
require('./wp-load.php');
?>
<?php get_header(); ?>
	<div class="allproj">
		</br></br></br>

	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts("category_name=news&paged=$paged");
		?>
		<?php wp_reset_postdata(); ?>
		  <?php query_posts('posts_per_page=-1&post_type=postit'); ?>
		  <?php if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>
		    <?php $terms = get_the_terms( $page->ID, 'taxonomy_name' ); ?>
		    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    	<div class="postpost">
		    	<h1 class="titrepost"><?php the_title(); ?></h1>
		    	<p class="postit"><?php the_excerpt(); ?>
		    	</p>
		    	</div>
		    </article>

		    <?php endwhile; ?>
		  <?php endif; ?>
	

		<a class="exit-off-canvas"></a>
	</div>
<?php get_footer(); ?>