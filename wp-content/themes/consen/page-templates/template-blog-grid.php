<?php
/**
 * Template Name: Blog Grid
 */
get_header();
$show_page  = get_post_meta( get_the_ID(),'_consen_breadcrumbs', true );  
$pageimagess  = get_post_meta( get_the_ID(),'_consen_pageimagess', true );  
$page_text_align  = get_post_meta( get_the_ID(),'_consen_page_text_align', true );  
$page_text_transform  = get_post_meta( get_the_ID(),'_consen_page_text_transform', true );  
$btitle  = get_post_meta( get_the_ID(),'_consen_btitle', true );
?>
<div class="breadcumb-area" <?php if($pageimagess){?> style="background-image:url(<?php echo esc_url($pageimagess)?>)" <?php } ?>>
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  <?php echo esc_attr( $page_text_align );?> <?php echo esc_attr( $page_text_transform );?>">
				<div class="breadcumb-inner">
					<?php consen_breadcrumbs(); ?>
				</div>
				<div class="brpt">
					<h2><?php wp_title(' '); ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- BLOG AREA START -->
<div class="consen-blog-index blog-area consen-blog-area blog-grid-item ptb-100">
	<div class="container">				
		<div class="row">														
			<?php
			$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
			$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );
			$wp_query = new WP_Query( array(
				'post_type' => 'post',
				'paged'     => $paged,
				'page'      => $paged,
			) );
			if ( $wp_query->have_posts() ) : ?>					
				<div class="col-md-12 col-sm-12 col-xs-12 bgimgload">
					<div class="row blog-messonary">								
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();		
							global $post; ?>
							<?php get_template_part( 'template-parts/content' , 'blog' ); ?>
							
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
			<?php endif; // if has_post() ?>
		</div>
	</div>
</div>
<!-- END BLOG AREA START -->
<?php 
get_footer();