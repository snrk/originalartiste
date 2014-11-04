<?php


get_header(); ?>


			<?php
			
			$post = $wp_query->post;
			
			if ( in_category('39') ) {
			
			include(TEMPLATEPATH . '/single-photo_d.php'); } 
			
			elseif ( in_category('38') ) {
			
			include(TEMPLATEPATH . '/single-photo_g.php'); }  
			
			elseif ( in_category('48') ) {
			
			include(TEMPLATEPATH . '/single-photo_d.php'); }  
			
			elseif ( in_category('49') ) {
			
			include(TEMPLATEPATH . '/single-photo_g.php'); }
			
			elseif ( in_category('50') ) {
			
			include(TEMPLATEPATH . '/single-video_d.php'); } 
			
			elseif ( in_category('51') ) {
			
			include(TEMPLATEPATH . '/single-video_g.php'); } 
			
			elseif ( in_category('37') ) {
			
			include(TEMPLATEPATH . '/single-video_d.php'); }  
			
			elseif ( in_category('36') ) {
			
			include(TEMPLATEPATH . '/single-video_g.php'); }  
			
			else {
			
			include(TEMPLATEPATH . '/single-default.php');
			
			}
			
			?>

			<?php while ( have_posts() ) : the_post(); ?>

				

	


			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>