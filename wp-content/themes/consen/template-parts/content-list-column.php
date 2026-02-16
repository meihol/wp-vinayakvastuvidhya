<?php
/**
 * Template part for displaying archive posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package consen
 */

?>
<!-- ARCHIVE QUERY -->
<div class="col-md-6 col-sm-12 col-xs-12  grid-item">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="consen-single-blog card border-0 ">					
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<div class="consen-blog-thumb ">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('consen-blog-default'); ?> </a>
					</div>									
				<?php } ?>
				<!-- BLOG CONTENT -->
				<div class="consen-blog-content-area ">
					<div class="consen-blog-meta-top">
						<?php the_category();?>
					</div>
					<!-- BLOG TITLE -->
					<div class="blog-page-title ">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					</div>
					<!-- BLOG META -->
					<div class="consen-blog-meta-left ">
							<span><i class="fa fa-clock-o"></i><?php echo get_the_time(get_option('date_format')); ?></span>
						<a class="meta_comments" href="<?php comments_link(); ?>">
							<i class="fa fa-comments-o"></i><?php comments_number( esc_html__('0 Comments','consen'), esc_html__('1 Comments','consen'), esc_html__('% Comments','consen') );?>
						</a>
					</div>														
				</div>	
				
			</div>
		</div> <!--  END SINGLE BLOG -->
</div><!-- #post-## -->