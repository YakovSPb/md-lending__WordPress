<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package md-group
 */
global $redux_init;
?>
<footer class="footer">
	<div class="container">
		<div class="footer__wrap">
			<div class="footer__menu">
				<ul>
					<li><a href="#mainpage"><?php if($redux_init['menu_footer_link1']) { ?><?php echo esc_attr($redux_init['menu_footer_link1']) ?><?php } ?></a></li>
					<li><a href="#myCatalog"><?php if($redux_init['menu_footer_link2']) { ?><?php echo esc_attr($redux_init['menu_footer_link2']) ?><?php } ?></a></li>
					<li><a href="#myProduction"><?php if($redux_init['menu_footer_link3']) { ?><?php echo esc_attr($redux_init['menu_footer_link3']) ?><?php } ?></a></li>
					<li><a href="#our-work"><?php if($redux_init['menu_footer_link4']) { ?><?php echo esc_attr($redux_init['menu_footer_link4']) ?><?php } ?></a></li>
				</ul>
			</div>

			<div class="footer__logo"><a href="<?php echo home_url("/"); ?>"><?php if($redux_init['footer_logo']['url']){ ?>
				<img src="<?php echo esc_url($redux_init['footer_logo']['url']); ?>" alt="MD-Group" />			
				<?php } ?></a></div>
				<div class="footer__contact">
					<p><?php if($redux_init['footer_call']) { ?><a href="#callback" class="popup-with-zoom-anim">
						<?php echo esc_attr($redux_init['footer_call']) ?>
					</a><?php } ?></p>
					<span>
						<?php if($redux_init['footer_phone_icon']['url']){ ?>
							<img src="<?php echo esc_url($redux_init['footer_phone_icon']['url']); ?>" alt="" />			
						<?php } ?>
						<a href="tel:<?php if($redux_init['footer_phone_link']) { ?><?php echo esc_attr($redux_init['footer_phone_link']) ?><?php } ?>">
							<?php if($redux_init['footer_phone_number']) { ?><?php echo esc_attr($redux_init['footer_phone_number']) ?><?php } ?></span></a>
						</a>

					</span>
				</div>
			</div>

		</div>
		<div class="footer__copy"><a target="_blank" href="http://cropmedia.ru/">cropmedia.ru, 2019</a></div>
	</footer>
	<div class="hidden">
		<?php if($redux_init['my_form']) { ?><?php echo do_shortcode( $redux_init['my_form']	); ?><?php } ?>

	</div> 

</body>
</html>