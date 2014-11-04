<?php /* Template Name: Projects */ ?>
<?php
define('WP_USE_THEMES', false);
require('./wp-load.php');
?>
<?php get_header(); ?>
	<div class="allproj">
		</br></br></br>
		<?php query_posts($query_string . '&cat=-27,-26,-24,-23,-22,-47'); ?>
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts("category_name=projects&paged=$paged");
		?>

		<?php
			while(have_posts()):
				the_post(); ?>
   		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="projet3">
    		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    		<h1 class="titre"><?php the_title(); ?></h1>
    	</article>
    	<?php endwhile; ?>	
		<a class="exit-off-canvas"></a>
	</div>
<?php get_footer(); ?>