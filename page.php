<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="allproj">

	<?php if(have_posts()):
		while(have_posts()):
			the_post();
		?>
	<a data-reveal-id="firstModal" href="#"><article class="projet1">
		<img class="retina" src="<?php bloginfo('template_directory'); ?>/img/voiture.png" alt="voiture" />
		<h1 class="titre"><?php the_title(); ?></h1>
	</article></a>
    <div id="firstModal" class="reveal-modal" data-reveal>
		<h2><?php the_title(); ?></h2>
		<div class="row">
			<div class="marginbot xlarge-6 large-12 columns nopadding"> 
    			<img src="<?php bloginfo('template_directory'); ?>/img/voiture_1.jpg" alt="voiture" />
        	</div>
        	<div class="lead xlarge-6 large-12 columns nopadding">
            	<h3>Your couch. It is mine.</h3>
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <a class="close-reveal-modal">&#215;</a> 
    </div>
    <?php endwhile;endif; ?>
	<article class="projet2">
		<a data-reveal-id="secondModal"  href="#"><img class="large" src="<?php bloginfo('template_directory'); ?>/img/post-it.png" alt="CONTACT" /></a>
		<h1 class="titrel">Project 2</h1>
	</article>
	<div id="secondModal" class="reveal-modal" data-reveal>
		<h2>Post-it Home 2</h2>
		<div class="row">
			<div class="flex-video widescreen marginbot xlarge-6 large-12 columns nopadding"> 
				<iframe width="600" height="400" src="//www.youtube.com/embed/VfQ6WjUmQWs" allowfullscreen></iframe>
	    	</div>
	    	<div class=" paddingleft lead xlarge-6 large-12 columns nopadding"> 
    	    	<h3>Your couch. It is mine.</h3>
    	        <p>Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere. Plurimum in amicitia amicorum bene suadentium valeat auctoritas, eaque et adhibeatur ad monendum non modo aperte sed etiam acriter, si res postulabit, et adhibitae pareatur.
    	        
    	        Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.
    	        
    	        Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.</p> 
	        </div>
	    </div>
	    <a class="close-reveal-modal">&#215;</a> 
	</div>
	<article class="projet3">
		<a href="slider.html"><img class="retina" src="<?php bloginfo('template_directory'); ?>/img/voiture.png" alt="voiture" /></a>
		<h1 class="titre">Project 3</h1>
	</article>
	<a data-reveal-id="quatreModal" href="#"><article class="projet4">
		<img class="retina" src="<?php bloginfo('template_directory'); ?>/img/voiture.png" alt="voiture" />
		<h1 class="titre">Project 4</h1>
	</article></a>
	<div id="quatreModal" class="reveal-modal" data-reveal>
		<h2>Project 4</h2>
		<div class="row">
			<div class="marginbot xlarge-6 large-12 columns nopadding"> 
				<img src="<?php bloginfo('template_directory'); ?>/img/voiture_1.jpg" alt="voiture" />
	    	</div>
	    	<div class="lead xlarge-6 large-12 columns nopadding">
	        	<h3>Your couch. It is mine.</h3>
	            <p>Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere. Plurimum in amicitia amicorum bene suadentium valeat auctoritas, eaque et adhibeatur ad monendum non modo aperte sed etiam acriter, si res postulabit, et adhibitae pareatur.
	            
	            Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.
	            
	            Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.</p>
	        </div>
	    </div>
	    <a class="close-reveal-modal">&#215;</a> 
	</div>
	<article class="projet5">
		<a data-reveal-id="cinqModal"  href="#"><img class="large" src="<?php bloginfo('template_directory'); ?>/img/post-it.png" alt="CONTACT" /></a>
		<h1 class="titrel">Project 5</h1>
	</article>
	<div id="cinqModal" class="reveal-modal" data-reveal>
		<h2>Post-it Home 5</h2>
		<div class="row">
			<div class="flex-video widescreen marginbot xlarge-6 large-12 columns nopadding"> 
				<iframe width="600" height="400" src="//www.youtube.com/embed/VfQ6WjUmQWs" allowfullscreen></iframe>
	    	</div>
	    	<div class=" paddingleft lead xlarge-6 large-12 columns nopadding"> 
		    	<h3>Your couch. It is mine.</h3>
		        <p>Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere. Plurimum in amicitia amicorum bene suadentium valeat auctoritas, eaque et adhibeatur ad monendum non modo aperte sed etiam acriter, si res postulabit, et adhibitae pareatur.
		        
		        Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.
		        
		        Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.</p> 
	        </div>
	    </div>
	    <a class="close-reveal-modal">&#215;</a> 
	</div>
	<a class="exit-off-canvas"></a>
</div>

<?php get_footer(); ?>