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
<div class="col-md-12 col-sm-12 col-xs-12 blog-right-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="consen-single-blog  consen-lt">
			<!-- BLOG THUMB -->
			<?php if (!empty(get_the_post_thumbnail())) { ?>
				<div class="consen-blog-thumb ">
					<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
					<div class="consen-blog-meta-top">
						<?php $consen_post_categories = get_the_category(); ?>

						<?php if (!empty($consen_post_categories)) :

							$consen_first_category = $consen_post_categories[0];

							$consen_category_name = $consen_first_category->name;
							$consen_category_link = get_category_link($consen_first_category); ?>
							<ul class="post-categories">
								<li><a href="<?php echo esc_url($consen_category_link) ?>"><?php esc_html_e($consen_category_name, 'consen') ?></a></li>
							</ul>
						<?php endif ?>
					</div>
				</div>
			<?php } ?>

			<!-- BLOG CONTENT -->
			<div class="consen-blog-content-area ">
				<div class="consen-blog-meta-left">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"> <i class="fa fa-user"></i><?php esc_html_e('by ', 'consen'); ?><?php the_author(); ?></a>
					<span><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_time(get_option('date_format')); ?></span>

				</div>
				<div class="blog-page-title ">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="blog-description">
					<p><?php echo wp_trim_words(get_the_content(), 23, ' '); ?></p>
				</div>
				<div class="blog-readmore">
					<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'consen'); ?> </a>
				</div>
			</div>
		</div>
	</div>
</div>