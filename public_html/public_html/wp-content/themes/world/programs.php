<?php 
	/*
		Template Name: Программы
		Template Post Type: post, page, product
	*/
	get_header();
?>
<?php get_template_part('template-parts/header-inner') ?>
	<section class="programs-content" id="programs-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="programs-title programs-content__title">
						Программы обучения
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h3 class="programs-content__subtitle">
						Профессиональная переподготовка
					</h3>
					<a href="professional-programms" class="programs-link">
						Посмотреть все 
					</a>
				</div>
				<div class="col-12">
					<div class="programs-slider programs-slider1">
						<?php 
							    $args = array(
									'numberposts' => 10,
									'category'    => 4,
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
				<div class="col-12">
					<h3 class="programs-content__subtitle">
						Повышение квалификации
					</h3>
					<a href="qualification-programms" class="programs-link">
						Посмотреть все 
					</a>
				</div>
				<div class="col-12">
					<div class="programs-slider programs-slider2">
						<?php 
							    $args = array(
									'numberposts' => 10,
									'category'    => 5,
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
<?php 
	get_footer();
?>