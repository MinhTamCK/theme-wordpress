<?php get_sidebar(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
	<h2><?php the_title(); ?></h2>
	<h3>Posted on <?php the_time('F jS, Y') ?></h3>
	<p><?php the_content(__('(more...)')); ?></p>
	</article>	
	<hr> <?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<!-- footer -->
<?php get_footer(); ?>