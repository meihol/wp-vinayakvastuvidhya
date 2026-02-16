<?php 
/*
single details page

*/

?>							
		<div class="consen-single-blog-details">
			<?php if(has_post_thumbnail()){?>
				<div class="consen-single-blog--thumb">
					<?php the_post_thumbnail('consen-blog-single'); ?>
				</div>									
			<?php } ?>
			<div class="consen-single-blog-details-inner">
			<?php if( 'post' == get_post_type() ) { ?>
			
				<!-- BLOG POST META  -->
				<div class="consen-blog-meta-left">
					<i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php esc_html_e('by:','consen') ?><?php the_author(); ?></a>	
					<i class="fa fa-calendar"></i><span><?php echo get_the_time(get_option('date_format')); ?></span>
					<i class="fa fa-comments"></i><a class="meta_comments" href="<?php comments_link(); ?>">
						<?php comments_number( esc_html__('0 Comments','consen'), esc_html__('1 Comments','consen'), esc_html__('% Comments','consen') );?>
					</a>
				</div>	
			<?php } // if post ?>
			
			<?php if ( '' != get_the_content() ) { ?>
			<div class="consen-single-blog-content">
				<div class="single-blog-content">
					<?php the_content(); ?>
					<div class="page-list-single">						
						<?php 
						/**
						* Display In-Post Pagination
						*/
						wp_link_pages( array(
							'link_before'   => '<span>',
							'link_after'    => '</span>',
							'before'        => '<p class="inner-post-pagination"><span>' . esc_html__('Pages:', 'consen'),
							'after'     => '</span></p>'
						)); ?>					
											
					</div>
				</div>
			</div>
			<?php } ?>

			<?php if( 'post' == get_post_type() ) { ?>	
				
				<div class="consen-blog-social">
					<div class="consen-single-icon">
					<?php
						if( function_exists('consen_blog_sharing') ){						
							consen_blog_sharing();
						}
						?>
					</div>
				</div>
			<?php } ?>

			<div class="post-details-footer">
				<?php if(has_category()){ ?>
				<div class="post-details-category">
					<h4><?php esc_html_e('Categories:','consen') ?></h4>
					<?php the_category(); ?>
				</div>
				<?php } ?>

				<?php if(has_tag()){ ?>
				<div class="post-tags">
					<h4><?php esc_html_e('Tags:','consen') ?></h4>
					<ul class="tags">
						<?php
							$tags = get_the_tags();
							foreach ($tags as $tag){ ?>
								<li><a href="<?php echo get_tag_link($tag); ?>"><?php echo esc_html($tag->name); ?></a>,</li>
							<?php }
						?>
					</ul>
				</div>
				<?php } ?>
			</div>

		</div>

		    <? // Biography start
			$author_data =  get_the_author_meta('description',get_query_var('author') );
			if($author_data !=''):
			?>
				<div class="author-bio d-flex align-items-center">
					<div class="author-img">
						<a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
							<?php print get_avatar( get_the_author_meta( 'user_email' ) ); ?>
						</a>
					</div>
					<div class="author-text">
						<h3><span class="media-heading"><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php print get_the_author(); ?></a></span></h3>
						<p><?php the_author_meta( 'description' ); ?> </p>
					</div>
				</div>
		
		</div>
	

<?php if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;