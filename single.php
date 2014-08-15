<?php get_header(); ?>
<?php get_left_sidebar(); ?>
<section id="content" role="main" class="<?php echo get_content_class(); ?>">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_right_sidebar(); ?>
<?php get_footer(); ?>