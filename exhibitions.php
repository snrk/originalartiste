<?php /* Template Name: Exhibitions */ ?>
<?php define('WP_USE_THEMES', false);
	require('./wp-load.php'); ?>

<?php get_header(); ?>
	<div class="allproj">
	</br></br></br>
	<?php $posts_gf = Array(); ?>
		<?php query_posts($query_string . '&cat=-47,-26,-27,-25,-24,-23'); ?>
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts("category_name=exhibitions&paged=$paged");
		?>
		<?php if(have_posts()):
			while(have_posts()):
				the_post();
				ob_start();	?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<a href="<?php the_permalink(); ?>"><h1 class="titre"><?php the_title(); ?></h1></a>
				</article>
				<?php
				$the_article = ob_get_clean();
				$posts_gf = array_merge($posts_gf, array($post->post_date  => $the_article )); 
			endwhile;
		endif; ?>
    	<?php query_posts('posts_per_page=-1&post_type=postitexhib'); ?>
    			  <?php if (have_posts()) : ?>
    			    <?php while (have_posts()) : the_post(); ?>
    			    <?php 
    			    	$terms = get_the_terms( $page->ID, 'taxonomy_name' ); 
    			    	ob_start();
    			    ?>
    			    
    			    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    			    	<div class="postpost">
    			    	<h1 class="titrepost"><?php the_title(); ?></h1>
    			    	<p class="postit"><?php the_excerpt(); ?>
    			    	</p>
    			    	</div>
    			    </article>
    				<?php
    					$the_article = ob_get_clean();
    					$posts_gf = array_merge($posts_gf, array($post->post_date => $the_article )); 
    	 			?>
    			    <?php endwhile; ?>
    			  <?php endif; ?>
    	<?php 
    	krsort($posts_gf);
    	foreach ($posts_gf as $date=>$html) {
    		echo $html;
    	}?>
		<a class="exit-off-canvas"></a>
	</div>
<?php get_footer(); ?>