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

?>
		<footer class="footer">
			<div class="container">
				<div class="footer__wrap">
					<div class="footer__menu">
						<ul>
							<li><a href="#mainpage">Главная</a></li>
							<li><a href="#myCatalog">Каталог</a></li>
							<li><a href="#myProduction">Производство и монтаж</a></li>
							<li><a href="#our-work">Выполненные работы</a></li>
						</ul>
					</div>
					<div class="footer__logo"><a href="/"><img src="<?php echo get_template_directory_uri();?>/img/@2x/logo2.png" alt="alt"></a></div>
					<div class="footer__contact">
						<p><a href="#callback" class="popup-with-zoom-anim">Заказать звонок</a></p>
						<span><img src="<?php echo get_template_directory_uri();?>/img/phone_footer.svg" alt="alt"><a href="tel:+78122090746">+7 812 209-07-46</a></span>
					</div>
				</div>
				
			</div>
<div class="footer__copy"><a target="_blank" href="http://cropmedia.ru/">cropmedia.ru, 2019</a></div>
		</footer>

		<div class="hidden">

			<form class="form popup-form callback zoom-anim-dialog" id="callback">

				<div class="success">Спасибо за заявку! <br/>
				Наши менеджеры свяжутся с вами в ближайшее время.</div>

				<!-- Hidden Required Fields -->
				<h3 class="h3">Отправить заявку</h3>
				<input type="text" name="Имя" placeholder="Ваше имя:">
				<input type="text" name="Телефон" placeholder="Телефон:" required>
				<input type="text" name="Комментарий" placeholder="Комментарий:">
				<div class="text-center">
					<button class="btn btn--yellow">Отправить</button>
					<p class="form__p">Нажимая кнопку, вы соглашаетесь на обработку персональных данных и соглашаетесь с политикой конфиденциальности.</p>
				</div>
				<input class="formname" type="hidden" name=""> 
			</form>
		</div>


	</body>
	</html>
