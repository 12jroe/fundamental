<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>

<?php if ( is_active_sidebar( 'left-primary-widget-area' ) ) : ?>
<div id="left-primary-sidebar" class="primary-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'left-primary-widget-area' ); ?>
</div><!-- #left-primary-sidebar -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'right-primary-widget-area' ) ) : ?>
<div id="right-primary-sidebar" class="primary-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'right-primary-widget-area' ); ?>
</div><!-- #right-primary-sidebar -->
<?php endif; ?>