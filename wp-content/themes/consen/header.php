<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><script></script> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consen
 */

?><!DOCTYPE html>


<html <?php language_attributes(); ?>>
<head><script></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php global $consen_opt; ?>

<!-- MAIN WRAPPER START -->
<div class="wrapper">
	<?php if (!empty($consen_opt['consen_header_display_none_hide']) && $consen_opt['consen_header_display_none_hide']==true): ?>	
	<div class="em40_header_area_main hdisplay_none">
	<?php else: ?>
		<div class="em40_header_area_main">
	<?php endif; ?>

 <!-- HEADER TOP AREA -->
 <?php  $consen_header_topa = get_post_meta( get_the_ID(),'_consen_consen_header_topa', true );  ?>
 <?php if($consen_header_topa==1){?> 

		<div class="consen-header-top">
			<div class="<?php if(!empty($consen_opt['consen_box_layout']) && $consen_opt['consen_box_layout']=="htopt_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
									
				<!-- STYLE 1 LEFT ADDRESS RIGHT ICON  -->
				 <?php if(!empty($consen_opt['consen_top_right_layout']) && $consen_opt['consen_top_right_layout']=="header_top_1"){?>			
					<div class="row">
						<!-- TOP LEFT -->
						<div class="col-xs-12 col-md-8 col-sm-8">
							<div class="top-address">
							    <img src="<?php echo esc_html($consen_opt['consen_top_imgicon']['url']); ?>" alt="">
							    <span> <?php echo esc_html($consen_opt['consen_header_top_wel']); ?> </span>
							</div>
						</div>
						<!-- TOP RIGHT -->
						<div class="col-xs-12 col-md-4 col-sm-4">
							<div class="top-right-menu">
							     <span> <?php echo esc_html($consen_opt['consen_header_top_follow']); ?> </span>
								<ul class="social-icons text-right">
									<?php 
										foreach($consen_opt['consen_social_icons'] as $key=>$value ) { 
										
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul> 
							</div>						
						</div>	
					</div>		
			</div>
		</div>
    <!-- END HEADER TOP AREA -->
 <?php }else{}
	
	
}?>
 
<div class="mobile_logo_area d-sm-block d-md-block d-lg-none">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php consen_mobile_top_logo(); ?>
			</div>
		</div>
	</div>
</div>

  <!-- START HEADER MAIN MENU AREA -->
  <?php  $consen_header_style = get_post_meta( get_the_ID(),'_consen_consen_header_style', true ); ?>
  <?php  $consen_logo_menu_style = get_post_meta( get_the_ID(),'_consen_consen_logo_menu_style', true ); ?>
  

   <?php if($consen_header_style==2){?>
   <!-- HEADER MANU AREA -->
	<div class="consen-main-menu d-md-none one_page d-lg-block d-sm-none d-none transprent-menu">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ 	  echo esc_attr('container'); }?>">
				<div class="row logo-left align-items-center">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_main_menu(); ?>
							<?php if (!empty($consen_opt['consen_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($consen_opt['consen_header_button_url'])){echo esc_url($consen_opt['consen_header_button_url']);}?>"><?php echo esc_html($consen_opt['consen_header_button']); ?></a>	
								</div>	
							<?php endif; ?>								
						</nav>
					</div>
				</div>
			</div>	
		</div>  			
	</div>	
	<!-- TRANSPARENT WITH STYKY MENU -->
   <?php }elseif($consen_header_style==3){?>
   <!-- HEADER MANU AREA -->
	<div class="consen-main-menu d-md-none one_page d-lg-block d-sm-none d-none transprent-menu style-two">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ 	  echo esc_attr('container'); }?>">
				<div class="row header-bg align-items-center">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_main_menu(); ?>
							<div class="sidebar">
								<div class="nav-btn navSidebar-button">
                                    <i class="fas fa-align-left"></i>
								</div>
							</div>
							<?php if (!empty($consen_opt['consen_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($consen_opt['consen_header_button_url'])){echo esc_url($consen_opt['consen_header_button_url']);}?>"><?php echo esc_html($consen_opt['consen_header_button']); ?></a>	
								</div>	
							<?php endif; ?>	
							
						</nav>
					</div>
				</div>
			</div>	
		</div>  			
	</div>	
	<!-- TRANSPARENT WITH STYKY MENU -->
   <?php } elseif($consen_header_style==5){?>
   <!-- HEADER MANU AREA -->
	<div class="consen-main-menu one_page d-md-none d-lg-block d-sm-none d-none a main menu">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">			
				<div class="row logo-left align-items-center">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_main_menu(); ?>
							<?php consen_search_code(); ?>	
							<div class="sidebar">
								<div class="nav-btn navSidebar-button">
                                    <i class="fas fa-align-left"></i>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>	
		</div>			
	</div>	
	<!-- TRANSPARENT WITH STYKY MENU -->
   <?php } elseif($consen_header_style==4){?>
 	<div class="consen-main-menu one_page d-md-none one_page d-lg-block d-sm-none d-none">
		<div class="consen_nav_area scroll_fixed">
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
  <?php } else{ ?>
	
	
<!-- ================ REDUX OPTION ================ -->
	<?php if(!empty($consen_opt['consen_defaulth_menu_layout']) && $consen_opt['consen_defaulth_menu_layout']==2 ){?>	
   <!-- HEADER TRANSPARENT MENU -->
 	<div class="consen-main-menu d-md-none one_page d-lg-block d-sm-none d-none transprent-menu">
		<div class="trp_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
				<div class="row logo-left align-items-center">				
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_ts_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_main_menu(); ?>
							<?php if (!empty($consen_opt['consen_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($consen_opt['consen_header_button_url'])){echo esc_url($consen_opt['consen_header_button_url']);}?>"><?php echo esc_html($consen_opt['consen_header_button']); ?></a>	
								</div>	
							<?php endif; ?>	
						</nav>				
					</div>
				</div>
			</div>	
		</div>			
	</div>	
 	<?php }else{ ?>
 	
   <!-- HEADER DEFAULT MANU AREA -->
 	<div class="consen-main-menu one_page d-md-none d-lg-block d-sm-none d-none a main menu">
		<div class="consen_nav_area">
			<div class="<?php if(!empty($consen_opt['consen_main_box_layout']) && $consen_opt['consen_main_box_layout']=="hmenu_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">			
				<div class="row logo-left align-items-center">				
					<!-- LOGO -->
					<div class="col-md-3 col-sm-3 col-xs-4">
						<?php consen_main_logo(); ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-8">
						<nav class="consen_menu">						
							<?php consen_main_menu(); ?>
							<?php if (!empty($consen_opt['consen_header_button'])): ?>
								<div class="donate-btn-header">
									<a class="dtbtn" href="<?php if (!empty($consen_opt['consen_header_button_url'])){echo esc_url($consen_opt['consen_header_button_url']);}?>"><?php echo esc_html($consen_opt['consen_header_button']); ?></a>	
								</div>	
							<?php endif; ?>								
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
		<div class="menu_area mobile-menu">
			<nav>
				<?php consen_mobile_menu(); ?>
			</nav>
		</div>					
	</div>			
	<!-- END MOBILE MENU AREA  -->
</div>


	    <!-- Sidebar Cart Item -->
		<div class="xs-sidebar-group info-group">
		<div class="dt-overlay bt-black"></div>
		<div class="dt-sidebar-widget">
			<div class="sidebar-container">
				<div class="widget-top">
					<a href="#" class="bar-close">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="sidebar-logo">
								<?php consen_main_logo(); ?>
						</div>
						<div class="sidebar-content-inner">
							<div class="sidebar-title">
								<h2><?php echo esc_html($consen_opt['consen_sidebar_title']); ?></h2>
							</div>							
							<div class="sidebar-desc">
								<p><?php echo esc_html($consen_opt['consen_sidebar_desc']); ?></p>
							</div>
							<!--<ul>-->
							<!--	<li> <?php echo esc_html($stech_opt['stech_header_top_mobiletwo']); ?></li>-->
							<!--</ul>-->
                            <div class="sidebar-contact-info">
                                <h2><?php echo esc_html($consen_opt['consen_sidebar_contact_title']); ?></h2>
                                 <ul>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-pin-1"></i>
                                       <?php echo esc_html($consen_opt['consen_sidebar_contact_location']); ?>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-call"></i>
                                      <?php echo esc_html($consen_opt['consen_sidebar_contact_phone']); ?> 
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-email"></i>
                                       <?php echo esc_html($consen_opt['consen_sidebar_contact_mail']); ?>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="flaticon flaticon-time-3"></i>
                                       <?php echo esc_html($consen_opt['consen_sidebar_contact_openhour']); ?>
                                    </li>
                                 </ul>
                            </div>

                           <!-- Social Box -->
						   <div class="sidebar-social-icon">
								<ul>
									<?php 
										foreach($consen_opt['consen_sidebar_social_icons'] as $key=>$value ) { 
											if($value != ''){						
												 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
											}
										}
									?>								
								</ul>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
