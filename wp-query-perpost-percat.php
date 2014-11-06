
 
		<?php
		 //this will query total 5 post in category id 3, im using .media .mediafront from bootstrap format and the  the_post_thumbnail  the_post_thumbnail(); will echo your default thumbnail size setting  
		// The Query
		query_posts( 'posts_per_page=5&cat=3' );

		// The Loop
		while ( have_posts() ) : the_post();?>
		<?php echo '<div class="media mediafront">' ;?>
		<a class="pull-left" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
		<?php echo '<div class="media-body">';?>
		
		<h4 class="media-heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
	
		<?php echo excerpt(50);?>
		<?php echo '</div>' ;?>
		<?php echo '</div>' ;?>
		<?php endwhile;

		// Reset Query
		wp_reset_query();
		?> 	