<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consen
 */

?><!DOCTYPE html>


<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php global $consen_opt; ?>

<!-- MAIN WRAPPER START -->
<div class="wrapper">
	<?php if (!empty($consen_opt['consen_header_display_none_hide']) && $consen_opt['consen_header_display_none_hide']==true): ?>	
	<div class="em40_header_area_main hdisplay_none">
	<?php else: ?>
		<div class="em40_header_area_main">
	<?php endif; ?>

<!-- MAIN HEADER START -->
 <?php  $consen_header_style = get_post_meta( get_the_ID(),'_consen_consen_header_style', true ); ?>
 <?php if($consen_header_style==1){?>
<div id="sticky-header" class="consen-main-menu menu-transparent onepage-menu menu-white d-md-none d-lg-block d-sm-none d-none ">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>		
   <?php }elseif($consen_header_style==2){?>  
 	<div id="sticky-header" class="consen-main-menu menu-transparent  onepage-menu menu-black d-md-none d-lg-block d-sm-none d-none">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>	   
	<?php }elseif($consen_header_style==4){?>  
 	<div id="sticky-header" class="consen-main-menu menu-transparent onepage-menu menu-black d-md-none d-lg-block d-sm-none d-none black_logo_wthite_menu ">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>	
    <?php } elseif($consen_header_style==3){?>  
 	<div id="sticky-header" class="consen-main-menu multipage-menu d-md-none d-lg-block d-sm-none d-none">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_main_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>	
    <?php }else{ ?>
	
	
<!-- ================ REDUX strat ================ -->
	<?php if(!empty($consen_opt['consen_defaulth_menu_layout']) && $consen_opt['consen_defaulth_menu_layout']==1 ){?>	
	<div id="sticky-header" class="consen-main-menu menu-transparent onepage-menu menu-white d-md-none d-lg-block d-sm-none d-none ">
		<div class="consen_nav_area scroll_fixed">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>	
 	<?php }elseif(!empty($consen_opt['consen_defaulth_menu_layout']) && $consen_opt['consen_defaulth_menu_layout']==2 ){?>	
 	<div id="sticky-header" class="consen-main-menu menu-transparent onepage-menu menu-black d-md-none d-lg-block d-sm-none d-none">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_one_page_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>	
 	<?php }elseif(!empty($consen_opt['consen_defaulth_menu_layout']) && $consen_opt['consen_defaulth_menu_layout']==3 ){?>	
 	<div id="sticky-header" class="consen-main-menu multipage-menu d-md-none d-lg-block d-sm-none d-none">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">	
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_main_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>
		</div> 			
	</div>
 	<?php }else{ ?>
   <!-- HEADER DEFAULT MANU AREA -->
 	<div class="consen-main-menu header-default-menu  d-md-none d-lg-block d-sm-none d-none">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">			
				<div class="row logo-left align-items-center">
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">
							<?php consen_main_menu(); ?>
						</nav>				
					</div>
				</div>
			</div>	
		</div>			
	</div>	
   <?php } ?>
   
   <?php } ?>	 
	<!-- MOBILE MENU AREA -->
	<div class="home-2 mbm d-sm-block d-md-block d-lg-none header_area main-menu-area">
		<div class="menu_area mobile-menu trp_nav_area">
			<nav>
				<?php consen_mobile_menu(); ?>
			</nav>
		</div>					
	</div>			
	<!-- END MOBILE MENU AREA  -->
</div>	