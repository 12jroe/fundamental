<?php get_header(); ?>
<?php get_left_sidebar(); ?>
<section id="content" role="main" class="<?php echo get_content_class(); ?>">
<header class="header">
<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'fundamental' ); ?><?php single_tag_title(); ?></h1>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_right_sidebar(); ?>
<?php get_footer(); ?>