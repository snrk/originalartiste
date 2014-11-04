<?php get_header(); ?>

		
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="content">
				<div class="layoutpost">
				<h2><?php the_title(); ?></h2>
				<a href="javascript:history.go(-1)" alt="Back" title="Back"  class="arrow">&#9668;</a>
				<a href="<?php bloginfo('url');?>" alt="Home" title="Home"  class="cross">&#215;</a>
				<div class="row">
					
				 <?php the_content(); ?>
				 	
				<div class="row">
				</div>
				<div class="row navi">
				<nav class="nav-single">
					
					<span class="nav-next"><?php next_post_link( '%link', '&#9668; <span class="meta-nav">' . _x( '%title', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '%title', 'Previous post link', 'twentytwelve' ) . '</span>&nbsp; &#9658; ' ); ?></span>
				</nav>
				</div>
				</div>
				</div>
			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>