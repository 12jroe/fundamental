<?php get_header(); ?>
<?php get_left_sidebar(); ?>
<section id="content" role="main" class="<?php echo get_content_class(); ?>">
<header class="header">
<h1 class="entry-title"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'fundamental' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'fundamental' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'fundamental' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'fundamental' ); }
?></h1>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_right_sidebar(); ?>
<?php get_footer(); ?>