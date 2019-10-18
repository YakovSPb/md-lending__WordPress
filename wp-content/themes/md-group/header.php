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
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/@2x/logo2.png" alt="alt"></a>
				</div>
				<div class="header__right">
					<div class="header__info">
						<div class="header__location">
							<img src="<?php echo get_template_directory_uri();?>/img/location.svg" alt="alt">
							Санкт-Петербург
						</div>
						<div class="header__call">
							<a href="#callback" class="popup-with-zoom-anim">Заказать звонок</a>  
						</div>
						<div class="header__phone">
							<a href="tel:+78122090746">
								<img class="header__phone-image" src="<?php echo get_template_directory_uri();?>/img/phone.svg" alt="alt">
								<span class="header__phone-number">+7 812 209-07-46</span></a>
								<img class="gumburger" src="<?php echo get_template_directory_uri();?>/img/menu_gumburger.svg" alt="alt">
							</div>
						</div>
						<nav>
							<ul class="main-menu">
								<li class="close-menu"><img src="<?php echo get_template_directory_uri();?>/img/@2x/close.png" alt="alt"></li>
								<li><a href="#myCatalog">Каталог</a></li>
								<li><a href="#myProduction">Производство и монтаж</a></li>
								<li><a href="#our-work">Выполненные работы</a></li>
								<li><a href="#s-contact">Контакты</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
