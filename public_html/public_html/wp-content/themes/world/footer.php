<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package world
 */

?>
	<footer class="footer" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="head-menu">
						<a href="<?php echo get_home_url(); ?>" class="head-logo">
							<img src="<?php bloginfo('template_directory') ?>/img/logo.svg">
							<div>
								<span class="logo-title">Открытый мир</span>
								<span class="logo-text">Институт дополнительного образования</span>
							</div>
						</a>
						<nav class="head-nav">
							<ul class="head-nav__menu">
								<li class="head-nav__item">
									<a href="about" class="head-nav__link">
										О нас
									</a>
								</li>
								<li class="head-nav__item">
									<a href="programs" class="head-nav__link">
										Программы
									</a>
								</li>
								<li class="head-nav__item">
									<a href="news" class="head-nav__link">
										Новости
									</a>
								</li>
								<li class="head-nav__item">
									<a href="receipt" class="head-nav__link">
										Поступление
									</a>
								</li>
							</ul>
						</nav>
						<button class="head-btn">
							Личный кабинет
						</button>
						<div class="head-tel">
							<a href="#" class="head-tel__link">
								+7 895 627 80 40
							</a>
							<a href="#" class="head-tel__link">
								+7 840 622 80 40
							</a>
						</div>
					</div>
				</div>
				<div class="col-12">
					<p class="footer-copy">
						Все права защищены. 2019
					</p>
				</div>
			</div>
		</div>
	</footer>
	<div style="display: none;">
	    <div class="box-modal" id="exampleModal">
	        <div class="box-modal_close arcticmodal-close">
	        	<i class="fas fa-times"></i>
	        </div>
	        <div class="box-modal__form contact-form__menu">
	        	<?php echo do_shortcode('[contact-form-7 id="15" title="Заявка"]'); ?>
	        </div>
	    </div>
	</div>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.arcticmodal-0.3.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
