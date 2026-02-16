<?php

if(!function_exists('consen_blog_breadcrumb')){
	function consen_blog_breadcrumb(){?>
		<!-- BLOG BREADCUMB START -->
		<div class="breadcumb-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">						
						<div class="breadcumb-inner">
							<h2><?php esc_html_e('Our Blog','consen'); ?></h2>							
						</div>	
					</div>
				</div>
			</div>
		</div>		
	<?php }	
}
 
if(!function_exists('consen_signle_blog_breadcrumb')){
	function consen_signle_blog_breadcrumb(){?>
		<!-- BLOG BREADCUMB START -->
		<div class="breadcumb-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">						
						<div class="breadcumb-inner">
							
							<?php consen_breadcrumbs(); ?>	
<h2><?php the_title(); ?></h2>							
						</div>	
					</div>
				</div>
			</div>
		</div>		
	<?php }	
}

if(!function_exists('consen_signle_case_breadcrumb')){
	function consen_signle_case_breadcrumb(){?>
		<!-- BLOG BREADCUMB START -->
		<div class="breadcumb-area">
			<div class="container">				
				<div class="row">
					<div class="col-md-12">						
						<div class="breadcumb-inner">
							<h2><?php esc_html_e('Case Study Details','consen'); ?></h2>
							<?php consen_breadcrumbs(); ?>							
						</div>	
					</div>
				</div>
			</div>
		</div>		
	<?php }	
}


// consen breadcrumb
if(!function_exists('consen_breadcrumbs')){
	function consen_breadcrumbs() {
		echo '<ul>';
		//if (!is_home()) {
					echo '<li><a href="';
					echo esc_url( home_url( '/' ) );
					echo '">';
					echo esc_html__('Home','consen');
					echo "</a></li>";
					echo '<li><i class="fa fa-angle-right"></i></li>';		

			if (is_category()) {	
					echo "<li>";
					echo single_cat_title( '', false );
					echo '</li>';
			}
			elseif( is_archive() ) {
				the_archive_title( '<li>', '</li>' );
			}			
			elseif (is_page()) {			
					echo '<li>';
					echo get_the_title();
					echo '</li>';
			}
			elseif (is_single()) {	
					echo "<li>";
					the_title();
					echo '</li>';
			}		
			elseif (is_tag()) {
				single_tag_title();
			}

			elseif (is_day()) {
				echo"<li>";
					echo esc_html__('Archive for','consen');
				echo'</li>';				
			}
			elseif (is_month()) {
				echo"<li>";
					echo esc_html__('Archive for','consen');
				echo'</li>';				
			}
			elseif (is_year()) {
				echo"<li>";
					echo esc_html__('Archive for','consen');
				echo'</li>';				
			}
			elseif (is_author()) {
				echo"<li>";
					echo esc_html__('Author','consen');
				echo'</li>';			
			}
			elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
				echo"<li>";
					echo esc_html__('Blog Archives','consen');
				echo'</li>';			
			}
			elseif (is_search()) {
				echo"<li>";
					echo esc_html__('Search Results','consen');
				echo'</li>';
			}
			elseif (is_404()) {
				echo"<li>";
					echo esc_html__('404','consen');
				echo'</li>';
			}
			
			
			
		//}
		echo '</ul>';
		
	
	}
}
// end consen breadcrumb

