<?php get_header(); ?>
<?php get_left_sidebar(); ?>
<section id="content" role="main" class="<?php echo get_content_class(); ?>">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php comments_template(); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_right_sidebar(); ?>
<?php get_footer(); ?>