<?php 
	/*
		Template Name: Главная страница
		Template Post Type: post, page, product
	*/
	get_header();
?>

	<header class="header" id="header">
		<div class="head">
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
				</div>
			</div>
		</div>
		<div class="header-slider">
			<?php if( have_rows('header-slider') ): ?>
				<?php while( have_rows('header-slider') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$subtitle = get_sub_field('subtitle');
					$title = get_sub_field('title');
					$text = get_sub_field('text');
					?>
					<div class="header-slider__item" style="background: url(<?php echo $image; ?>) no-repeat center top / cover">
						<div class="header-slider__offer">
							<h4 class="header-slider__subtitle">
								<?php echo $subtitle; ?>
							</h4>
							<h1 class="header-slider__title">
								<?php echo $title; ?>
							</h1>
							<p class="header-slider__text">
								<?php echo $text; ?>
							</p>
							<button class="header-slider_btn call-btn">
								Подать заявку
							</button>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</header>
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="about-menu">
						<div class="about-left">
							<h2 class="about-title">
								О нас
							</h2>
							<p class="about-text">
								Наша миссия – предоставление образовательных услуг, отвечающих государственным стандартам и нацеленных на практический результат.
								В процессе обучения слушатели приобретают различные умения, навыки и компетенции, соответствующие основным требованиям и стандартам.
							</p>
							<p class="about-text">
								Мы выдаем диплом с присвоением квалификации, дающий право на занятие профессиональной деятельностью в соответствии с освоенной образовательной программой 
							</p>
						</div>
						<div class="about-right">
							<img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="advantage" id="advantage">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="advantage-title">
						Наши преимущества
					</h2>
				</div>
				<div class="col-xl-3 ml-xl-auto">
					<div class="advantage-item">
						<div class="advantage-item__icon">
							<img src="<?php bloginfo('template_directory') ?>/img/advantage-icon.svg" />							
						</div>
						<p class="advantage-item__text">
							Не нужно приобретать учебные материалы, просто скачайте их
						</p>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="advantage-item">
						<div class="advantage-item__icon">
							<img src="<?php bloginfo('template_directory') ?>/img/advantage-icon2.svg" />							
						</div>
						<p class="advantage-item__text">
							Поддержка слушателей от наших преподавателей в любое время
						</p>
					</div>
				</div>
				<div class="col-xl-3 mr-xl-auto">
					<div class="advantage-item">
						<div class="advantage-item__icon">
							<img src="<?php bloginfo('template_directory') ?>/img/advantage-icon3.svg" />							
						</div>
						<p class="advantage-item__text">
							Применением дистанционных образовательных технологий
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="programs" id="programs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="programs-title">
						Программы обучения
					</h2>
					<a href="programs" class="programs-link">
						Посмотреть все 
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="programs-slider">
						<?php 
							    $args = array(
									'numberposts' => 15,
									'category'    => '5,4',
									'orderby'     => 'date',
									'order'       => 'DESC',
									'include'     => array(),
									'exclude'     => array(),
									'meta_key'    => '',
									'meta_value'  =>'',
									'post_type'   => 'post',
									'suppress_filters' => true, 
								);
								$posts = get_posts( $args );
								foreach($posts as $post){ setup_postdata($post); ?>
									<div class="programs-slider__wr">
										<div class="programs-slider__item">
											<img src="<?php the_field('professional-photo'); ?>" class="programs-slider__item-img" />
											<div class="programs-slider__item-info">
												<h4 class="programs-slider__title">
													<?php the_field('professional-title'); ?>
												</h4>
												<div class="programs-slider__time">
													<span class="duration">Длительность:</span>
													<span class="duration-count"><?php the_field('professional-count'); ?></span>
												</div>
												<div class="programs-slider__cost">
													<span class="cost">Стоимость:</span>
													<span class="cost-number"><?php the_field('professional-cost'); ?></span>
												</div>
												<a href="<?php the_permalink(); ?>" class="programs-slider__link">
													Подробнее
												</a>
											</div>
										</div>
									</div>
								<?php   
								}
							wp_reset_postdata();
						?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contact-form" id="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="contact-form__wr">
						<h2 class="contact-form__title">
							Не упускай свой шанс – отправь заявку уже сейчас 
						</h2>
						<p class="contact-form__text">
							Вы можете обучаться без отрыва от работы, в любое удобное для Вас время. Система Дистанционного обучения в Вашем распоряжении 24 часа в сутки.
						</p>
						<div class="contact-form__menu contact-form__hor">
							<?php echo do_shortcode('[contact-form-7 id="15" title="Заявка"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 
	get_footer();
?>
