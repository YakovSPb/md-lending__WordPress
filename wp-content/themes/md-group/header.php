<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package md-group
 */
global $redux_init; 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap&subset=cyrillic" rel="stylesheet">

	<?php wp_head(); ?>

	<style>
		.tab__lookall-but:after{background:url(<?php echo get_template_directory_uri();?>/img/down-arrow.svg);}
	</style>
</head>

<body <?php body_class(); ?>>
	<header id="mainpage" class="header">
		<div class="container">
			<div class="header__wrap">
				<div class="header__logo">
					<a href="<?php echo home_url("/"); ?>"><?php if($redux_init['header_logo']['url']){ ?>
						<img src="<?php echo esc_url($redux_init['header_logo']['url']); ?>" alt="MD-Group" />			
						<?php } ?></a>
					</div>
					<div class="header__right">
						<div class="header__info">
							<div class="header__location">
								<?php if($redux_init['location_icon']['url']){ ?>
									<img src="<?php echo esc_url($redux_init['location_icon']['url']); ?>" alt="MD-Group" />			
								<?php } ?>
								<?php if($redux_init['location_text']) { ?><?php echo esc_attr($redux_init['location_text']) ?><?php } ?>
							</div>
							<div class="header__call">
								<?php if($redux_init['header_call']) { ?><a href="#callback" class="popup-with-zoom-anim">
									<?php echo esc_attr($redux_init['header_call']) ?>
									</a> <?php } ?>
								</div>
								<div class="header__phone">
									<a href="tel:<?php if($redux_init['phone_link']) { ?><?php echo esc_attr($redux_init['phone_link']) ?><?php } ?>">

<?php if($redux_init['location_icon']['url']){ ?>
									<img class="header__phone-image" src="<?php echo esc_url($redux_init['location_icon']['url']); ?>" alt="" />			
								<?php } ?>
				
										<span class="header__phone-number"><?php if($redux_init['phone_number']) { ?><?php echo esc_attr($redux_init['phone_number']) ?><?php } ?></span></a>
										<img class="gumburger" src="<?php echo get_template_directory_uri();?>/img/menu_gumburger.svg" alt="alt">
									</div>
								</div>
								<nav>
									<ul class="main-menu">
										<li class="close-menu"><img src="<?php echo get_template_directory_uri();?>/img/@2x/close.png" alt="alt"></li>
										<li><a href="#myCatalog">
											<?php if($redux_init['menu_link1']) { ?><?php echo esc_attr($redux_init['menu_link1']) ?><?php } ?>
										</a></li>
										<li><a href="#myProduction">
											<?php if($redux_init['menu_link2']) { ?><?php echo esc_attr($redux_init['menu_link2']) ?><?php } ?>
										</a></li>
										<li><a href="#our-work">
											<?php if($redux_init['menu_link3']) { ?><?php echo esc_attr($redux_init['menu_link3']) ?><?php } ?>
										</a></li>
										<li><a href="#s-contact">
											<?php if($redux_init['menu_link4']) { ?><?php echo esc_attr($redux_init['menu_link4']) ?><?php } ?>
										</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</header>
