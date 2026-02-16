<?php
/**
 * Standard blog index page
 *
 * @package Layers
 * @since Layers 1.0.0
 */

get_header();

if ( is_active_sidebar( 'sidebar-1' ) ) {
	$class="col-lg-8 col-md-8 col-sm-12 col-xs-12";
}else{
	$class="col-md-12";
}	
get_header();
consen_blog_breadcrumb(); ?>
<!-- BLOG AREA START -->
<div class="consen-blog-index consen-blog-area">
	<div class="container">				
		<div class="row">
			<?php
			if ( have_posts() ) : ?>		
				<div class="<?php echo esc_attr($class); ?>">
					<div class="row">								
						<?php while (have_posts() ) : the_post();
							global $post; ?>
							<?php get_template_part( 'template-parts/content' , 'list' ); ?>
						<?php endwhile; // while has_post(); ?>								
					</div>
					<!-- START PAGINATION -->
					<div class="row">
						<div class="col-md-12">
							<?php consen_pagination();?>
						</div>
					</div>
					<!-- END START PAGINATION -->								
				</div>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="col-md-4  col-sm-12 col-xs-12  sidebar-right content-widget">
					<div class="blog-left-side">
						<?php 
						 	dynamic_sidebar( 'sidebar-1' ); 
						?>
					</div>
				</div>
				<?php } ?>					
			<?php endif; // if has_post() ?>													
		</div>
	</div>
</div>
<!-- END BLOG AREA START -->	
<?php
get_footer();