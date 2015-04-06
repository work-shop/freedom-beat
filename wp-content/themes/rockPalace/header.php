<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js" >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />




	<?php 
		global $data; 
		$favicon = ''; 
		if(isset($data['favicon']))
			$favicon = $data['favicon'];
		if (empty($favicon)) { $favicon = get_template_directory_uri() .'/images/favicon.ico'; }	
	?>

	<title>
	<?php

		global $page, $paged;

		wp_title( '|', true, 'right' );

		bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( 'Page %s' , max( $paged, $page ) );

	?>
	</title>
		
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<link rel="icon" type="image/png" href="<?php echo $data['favicon'] ?>">


		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

		
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php 		if(isset($data['google_analytics'])) echo  stripText($data['google_analytics']); ?>


	

<?php  global $sitepress;  wp_head();?>
<link  id="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/options.css" rel="stylesheet" /> 
</head>		
<body <?php body_class(); ?>>


	<header>
		<div id="headerwrap" >
			<div class="TopHolder">

					<?php showTopCart()	?>	
			
			</div>			
			<div id="header">		
			
			<div id="logo">
			
			<?php $logo = $data['logo']; ?>
			
				<a href="<?php echo home_url(); ?>"><img src="<?php if ($logo != '') {?><?php echo $logo; ?><?php } else {?><?php get_template_directory_uri(); ?>/images/logo.png<?php }?>" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description') ?>" /></a>

			</div>
			<div class="respMenu">
				<?php 
				
				if ( has_nav_menu( 'resp_menu' ) ) {
					$menuParameters =  array(
					  'theme_location' => 'resp_menu', 
					  'walker'         => new Walker_Responsive_Menu(),
					  'echo'            => false,
					  'items_wrap'     => '<form name="menu_selector" method="post" action="#"><select name="url_list" class="event-type-selector-dropdown" onchange="gotosite(this)"><option value="" selected="selected" disabled="disabled">Please select...</option>%3$s</select></form>',
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a>,<select>,<option>' );
				}?>	
			</div>


				
		
			<div class="pagenav">
			
				<?php 
				if ( has_nav_menu( 'main-menu' ) ) {
					 wp_nav_menu( array(
					 'container' =>false,
					 'container_class' => 'menu-header',
					 'theme_location' => 'main-menu',
					 'echo' => true,
					 'fallback_cb' => 'ideo_fallback_menu',
					 'before' => '',
					 'after' => '',
					 'link_before' => '',
					 'link_after' => '',
					 'depth' => 0,
					 'walker' => new description_walker())
					 ); 
				}
				?>
					
			</div>	

			</div>
		</div>
					
	</header>			
		

