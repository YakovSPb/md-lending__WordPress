<!-- Template name: Homepage -->

<?php get_header(); ?>

<section class="promo">
	<div class="mobile-title">
		<div class="slider__text">
			<h1 class="h1">Изготовление и монтаж ограждений из нержавеющей стали и стекла</h1>
			<div class="slider__desc">
				Для любых зданий и сооружений
			</div>
			<a href="#callback" class="btn btn--blue popup-with-zoom-anim">Расчитать стоимость</a>
		</div>
	</div>



	<div class="container">
		<div class="slider">

			<div class="slider__item">
				<div class="slider__wrap">
					<?php if($redux_init['main_slide1']['url']){ ?>
						<img class="slider__img--1200" src="<?php echo esc_url($redux_init['main_slide1']['url']); ?>" alt="alt" />			
					<?php } ?>
					<?php if($redux_init['main_slide1_750']['url']){ ?>
						<img class="slider__img--750" src="<?php echo esc_url($redux_init['main_slide1_750']['url']); ?>" alt="alt" />			
					<?php } ?>


					<div class="slider__text">
						<h1 class="h1"><?php if($redux_init['slide1_title']) { ?><?php echo esc_attr($redux_init['slide1_title']) ?><?php } ?></h1>
						<div class="slider__desc">
							<?php if($redux_init['slide1_desc']) { ?><?php echo esc_attr($redux_init['slide1_desc']) ?><?php } ?>
						</div>
						<a href="#callback" class="btn btn--blue popup-with-zoom-anim">Расчитать стоимость</a>
					</div>
				</div>
			</div>

			<div class="slider__item">
				<div class="slider__wrap">
					<?php if($redux_init['main_slide2']['url']){ ?>
						<img class="slider__img--1200" src="<?php echo esc_url($redux_init['main_slide2']['url']); ?>" alt="alt" />			
					<?php } ?>
					<?php if($redux_init['main_slide2_750']['url']){ ?>
						<img class="slider__img--750" src="<?php echo esc_url($redux_init['main_slide2_750']['url']); ?>" alt="alt" />			
					<?php } ?>


					<div class="slider__text">
						<h1 class="h1"><?php if($redux_init['slide2_title']) { ?><?php echo esc_attr($redux_init['slide2_title']) ?><?php } ?></h1>
						<div class="slider__desc">
							<?php if($redux_init['slide2_desc']) { ?><?php echo esc_attr($redux_init['slide2_desc']) ?><?php } ?>
						</div>
						<a href="#callback" class="btn btn--blue popup-with-zoom-anim">Расчитать стоимость</a>
					</div>
				</div>
			</div>

			<div class="slider__item">
				<div class="slider__wrap">
					<?php if($redux_init['main_slide3']['url']){ ?>
						<img class="slider__img--1200" src="<?php echo esc_url($redux_init['main_slide3']['url']); ?>" alt="alt" />			
					<?php } ?>
					<?php if($redux_init['main_slide3_750']['url']){ ?>
						<img class="slider__img--750" src="<?php echo esc_url($redux_init['main_slide3_750']['url']); ?>" alt="alt" />			
					<?php } ?>


					<div class="slider__text">
						<h1 class="h1"><?php if($redux_init['slide3_title']) { ?><?php echo esc_attr($redux_init['slide3_title']) ?><?php } ?></h1>
						<div class="slider__desc">
							<?php if($redux_init['slide3_desc']) { ?><?php echo esc_attr($redux_init['slide3_desc']) ?><?php } ?>
						</div>
						<a href="#callback" class="btn btn--blue popup-with-zoom-anim">Расчитать стоимость</a>
					</div>
				</div>
			</div>



		</div>
	</div>
</section>

<section id="myCatalog" class="sect-catalog">
	<div class="container">
		<h2 class="h2"><?php if($redux_init['h2_catalog']) { ?><?php echo esc_attr($redux_init['h2_catalog']) ?><?php } ?></h2>
		<div class="tabs__wrapper">
			<div class="tabs">
				<span class="tab"><p><?php echo get_the_category_by_ID(2); ?></p></span>
				<!-- <span class="tab">Ограждения<br/> из нержавеющей стали</span> -->
				<span class="tab"><p><?php echo get_the_category_by_ID(3); ?></p></span>
				<span class="tab"><p><?php echo get_the_category_by_ID(4); ?></p></span>        
			</div>
			<div class="tab_content">

				<div class="tab_item">
					<?php
					$num=-1;
					$slug='Ограждения из стекла';
					$arg=array(
						'post_type' => 'catalog',
						'posts_per_page'=>$num,
						'mytypes'=>$slug
					);
					$catquery = new WP_Query($arg);
					while($catquery->have_posts()) : $catquery->the_post();
						?>

						<div class="tab__icon">
							<a rel="group" class="fancybox" href="<?php echo get_the_post_thumbnail_url();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="alt"></a>
							<p><?php the_title();?></p>
							<span><? the_content();?></span>
							<a href="#callback" class="btn btn--yellow popup-with-zoom-anim">Заказать</a>
						</div>

					<?php	endwhile;wp_reset_postdata(); ?>
				</div>


				<div class="tab_item">
					<?php
					$num=-1;
					$slug='Ограждения из стекла';
					$arg=array(
						'post_type' => 'catalog',
						'posts_per_page'=>$num,
						'mytypes'=>$slug
					);
					$catquery = new WP_Query($arg);
					while($catquery->have_posts()) : $catquery->the_post();
						?>

						<div class="tab__icon">
							<a rel="group2" class="fancybox" href="<?php echo get_the_post_thumbnail_url();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="alt"></a>
							<p><?php the_title();?></p>
							<span><? the_content();?></span>
							<a href="#callback" class="btn btn--yellow popup-with-zoom-anim">Заказать</a>
						</div>

					<?php	endwhile;wp_reset_postdata(); ?>

				</div>
				<div class="tab_item">
					<?php
					$num=-1;
					$slug=' Комбинированные ограждения';
					$arg=array(
						'post_type' => 'catalog',
						'posts_per_page'=>$num,
						'mytypes'=>$slug
					);
					$catquery = new WP_Query($arg);
					while($catquery->have_posts()) : $catquery->the_post();
						?>

						<div class="tab__icon">
							<a rel="group2" class="fancybox" href="<?php echo get_the_post_thumbnail_url();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="alt"></a>
							<p><?php the_title();?></p>
							<span><? the_content();?></span>
							<a href="#callback" class="btn btn--yellow popup-with-zoom-anim">Заказать</a>
						</div>

					<?php	endwhile;wp_reset_postdata(); ?>
				</div>
				<div class="tab__lookall-but">
					<span class="tab__lookall-but__down">Посмотреть все</span>
					<span class="tab__lookall-but__up">Свернуть</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="application">
	<div class="container">
		<div class="application__wrap">
			<?php if($redux_init['catalog_img_1200']['url']){ ?>
				<img class="application__img--1200" src="<?php echo esc_url($redux_init['catalog_img_1200']['url']); ?>" alt="alt" />			
			<?php } ?>
			<?php if($redux_init['catalog_img_750']['url']){ ?>
				<img class="application__img--750" src="<?php echo esc_url($redux_init['catalog_img_750']['url']); ?>" alt="alt" />			
			<?php } ?>
			<?php if($redux_init['catalog_img_320']['url']){ ?>
				<img class="application__img--320" src="<?php echo esc_url($redux_init['catalog_img_320']['url']); ?>" alt="alt" />			
			<?php } ?>
			<div class="application__info">
				<span>
					<?php if($redux_init['call_desc']) { ?><?php echo esc_attr($redux_init['call_desc']) ?><?php } ?>
				</span>
				<a href="#callback" class="btn popup-with-zoom-anim">Оформить заявку</a>
			</div>
		</div>
	</div>
</section>

<section id="myProduction" class="production">
	<div class="container">
		<h2 class="h2"><?php if($redux_init['production_h2']) { ?><?php echo esc_attr($redux_init['production_h2']) ?><?php } ?></h2>
		<div class="production__desc">
			<?php if($redux_init['production_desc']) { ?><?php echo esc_attr($redux_init['production_desc']) ?><?php } ?>
		</div>
		<div class="production__h4">
			<?php if($redux_init['production_title_for_icons']) { ?><?php echo esc_attr($redux_init['production_title_for_icons']) ?><?php } ?>
		</div>
		<div class="production__steps">
			<div class="production__item">
				<?php if($redux_init['production_icon1']['url']){ ?>
					<img src="<?php echo esc_url($redux_init['production_icon1']['url']); ?>" alt="alt" />			
				<?php } ?>
				<p><?php if($redux_init['production_title_icon1']) { ?><?php echo esc_attr($redux_init['production_title_icon1']) ?><?php } ?></p>
			</div>
			<div class="production__item">
				<?php if($redux_init['production_icon2']['url']){ ?>
					<img src="<?php echo esc_url($redux_init['production_icon2']['url']); ?>" alt="alt" />			
				<?php } ?>
				<p><?php if($redux_init['production_title_icon2']) { ?><?php echo esc_attr($redux_init['production_title_icon2']) ?><?php } ?></p>
			</div>
			<div class="production__item">
				<?php if($redux_init['production_icon3']['url']){ ?>
					<img src="<?php echo esc_url($redux_init['production_icon3']['url']); ?>" alt="alt" />			
				<?php } ?>
				<p><?php if($redux_init['production_title_icon3']) { ?><?php echo esc_attr($redux_init['production_title_icon3']) ?><?php } ?></p>
			</div>
			<div class="production__item">
				<?php if($redux_init['production_icon4']['url']){ ?>
					<img src="<?php echo esc_url($redux_init['production_icon4']['url']); ?>" alt="alt" />			
				<?php } ?>
				<p><?php if($redux_init['production_title_icon4']) { ?><?php echo esc_attr($redux_init['production_title_icon4']) ?><?php } ?></p>
			</div>
			<div class="production__item">
				<?php if($redux_init['production_icon5']['url']){ ?>
					<img src="<?php echo esc_url($redux_init['production_icon5']['url']); ?>" alt="alt" />			
				<?php } ?>
				<p><?php if($redux_init['production_title_icon5']) { ?><?php echo esc_attr($redux_init['production_title_icon5']) ?><?php } ?></p>
			</div>
			<div class="production__item">
				<?php if($redux_init['production_icon6']['url']){ ?>
					<img src="<?php echo esc_url($redux_init['production_icon6']['url']); ?>" alt="alt" />			
				<?php } ?>
				<p><?php if($redux_init['production_title_icon6']) { ?><?php echo esc_attr($redux_init['production_title_icon6']) ?><?php } ?></p>
			</div>
		</div>
	</div>
</section>

<section class="solution">
	<div class="container">
		<div class="solution__wrap">
			<div class="solution__title">
				<?php if($redux_init['offer_title']) { ?><?php echo esc_attr($redux_init['offer_title']) ?><?php } ?>
			</div>
			<div class="solution__desc">
				<?php if($redux_init['offer_desc']) { ?><?php echo esc_attr($redux_init['offer_desc']) ?><?php } ?>
			</div>
			<div class="solution__btn">
				<a href="#callback" class="popup-with-zoom-anim btn btn--dark">Отправить заявку</a>
			</div>
		</div>
	</div>
</section>

<section id="our-work" class="our-work">
	<div class="container">
		<h2 class="h2"><?php if($redux_init['h2_portfolio']) { ?><?php echo esc_attr($redux_init['h2_portfolio']) ?><?php } ?></h2>
		<div class="tabs__wrapper2">
			<div class="tabs2">
				<span class="tab2">Ограждения<br/> из нержавеющей стали</span>
				<span class="tab2">Ограждения<br/> из стекла</span>
				<span class="tab2">Комбинированные<br/> ограждения</span>        
			</div>
			<div class="tab_content2">
				<div class="tab_item2">
					<div class="tab__slider tab__slider">
						<?php
						$num=-1;
						$slug='Ограждения из нержавеющей стали';
						$arg=array(
							'post_type' => 'cases',
							'posts_per_page'=>$num,
							'mytypes2'=>$slug
						);
						$catquery = new WP_Query($arg);
						while($catquery->have_posts()) : $catquery->the_post();
							?>

							<div class="tab__slider-item">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="alt">
							</div>

						<?php	endwhile;wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="tab_item2">
					<div class="tab__slider tab__slider">
						<?php
						$num=-1;
						$slug='Ограждения из стекла';
						$arg=array(
							'post_type' => 'cases',
							'posts_per_page'=>$num,
							'mytypes2'=>$slug
						);
						$catquery = new WP_Query($arg);
						while($catquery->have_posts()) : $catquery->the_post();
							?>

							<div class="tab__slider-item">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="alt">
							</div>

						<?php	endwhile;wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="tab_item2">
					<div class="tab__slider tab__slider">
						<?php
						$num=-1;
						$slug='Ограждения из стекла';
						$arg=array(
							'post_type' => 'cases',
							'posts_per_page'=>$num,
							'mytypes2'=>$slug
						);
						$catquery = new WP_Query($arg);
						while($catquery->have_posts()) : $catquery->the_post();
							?>

							<div class="tab__slider-item">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt="alt">
							</div>

						<?php	endwhile;wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="s-contact" class="s-contact">
	<h2 class="h2"><?php if($redux_init['h2_contact']) { ?><?php echo esc_attr($redux_init['h2_contact']) ?><?php } ?></h2>
	<div class="s-contact__wrap">
		<div class="container">
			<div class="s-contact__flex">
				<div class="s-contact__map">
					<?php if($redux_init['map_yandex']) { ?><?php echo $redux_init['map_yandex'] ?><?php } ?>
				</div>
				<div class="s-contact__text">
					<p><?php if($redux_init['label_adress']) { ?><?php echo esc_attr($redux_init['label_adress']) ?><?php } ?><br class="br320"/> <?php if($redux_init['text_adress']) { ?><?php echo esc_attr($redux_init['text_adress']) ?><?php } ?><br class="br320"/> <?php if($redux_init['text_adress2']) { ?><?php echo esc_attr($redux_init['text_adress2']) ?><?php } ?></p>
					<p><?php if($redux_init['label_footer_phone']) { ?><?php echo esc_attr($redux_init['label_footer_phone']) ?><?php } ?> <a href="tel:<?php if($redux_init['link_footer_phone']) { ?><?php echo esc_attr($redux_init['link_footer_phone']) ?><?php } ?>"><?php if($redux_init['text_footer_phone']) { ?><?php echo esc_attr($redux_init['text_footer_phone']) ?><?php } ?></a></p>
					<p><?php if($redux_init['label_footer_email']) { ?><?php echo esc_attr($redux_init['label_footer_email']) ?><?php } ?>  <?php if($redux_init['text_footer_email']) { ?><?php echo esc_attr($redux_init['text_footer_email']) ?><?php } ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>