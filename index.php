<?php get_header(); ?>


<?php if (have_posts()) : ?>
<div id="post-grid" class="post-grid">
<?php while (have_posts()) : the_post(); ?>	

   		<div id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
		 <?php if ( has_post_thumbnail() ) { ?>
         <div class="gridly-image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a></div>
          <div class="gridly-category"><p><?php the_category(', ') ?></p></div>
		  <?php } ?>
               <?php if ( get('featured_video',TRUE) ) {
                echo '<div class="featured-video">' . get('featured_video',TRUE) . '</div>';
               } else {
               } ?>
       			<div class="gridly-copy"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


<?php the_excerpt(); ?> 

               <p class="gridly-date"><a href="<?php the_permalink() ?>"><?php the_time(get_option('date_format')); ?></a></p>
         </div>
       </div>
       
       

<?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>
    
<?php next_posts_link('<p class="view-older">View Older Entries</p>') ?>
    
 
<?php get_footer(); ?>
