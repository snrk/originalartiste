<?php /* Template Name: Contact */ ?>
<?php
define('WP_USE_THEMES', false);
require('./wp-load.php');
?>
<?php get_header(); ?>
		<div class="allproj">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<!--POUR AFFICHER LE TITRE-->
			<!--POUR AFFICHER LE CONTENU-->
			<?php the_content(); ?>	
		<?php endwhile; endif; ?>
			<a class="exit-off-canvas"></a>
	</div>
<?php get_footer(); ?>





