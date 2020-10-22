<?php 
	/*
		Template Name: Новости
		Template Post Type: post, page, product
	*/
	get_header();
?>
<?php get_template_part('template-parts/header-inner') ?>
	<section class="news-content" id="news-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="news-content__main">
						<h2 class="news-content__title">
							Новости
						</h2>
						<div class="news-menu">
							<?php 
							    $args = array(
									'numberposts' => 3,
									'category'    => 2,
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
									<!-- Начало / Вывод повторяющегося отрезка, отвечающего за одну запись -->
									<div class="news-menu__small-item">
										<img src="<?php the_field('news-photo'); ?>" />
										<div class="news-menu__small-info">
											<a href="<?php the_permalink() ?>" class="news-menu__small-link">
												<?php the_title() ?>
											</a>
											<p class="news-menu__small-text">
												<?php the_field('news-text'); ?>
											</p>
										</div>
									</div>
									<!-- Конец / Вывод повторяющегося отрезка, отвечающего за одну запись -->
								<?php   
								}
								wp_reset_postdata(); // сброс
							?>
						</div>
						<div class="news-similar">
							<?php 
							    $args = array(
									'numberposts' => 4,
									'category'    => 3,
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
									<!-- Начало / Вывод повторяющегося отрезка, отвечающего за одну запись -->
									<div class="news-similar__item">
										<img src="<?php the_field('similar-photo'); ?>">
										<div class="news-similar__item-info">
											<a href="<?php the_permalink() ?>" class="news-similar__item-link">
												<?php the_title() ?>
											</a>
											<p class="news-similar__item-text">
												<?php the_field('similar-text'); ?>
											</p>
										</div>
									</div>
									<!-- Конец / Вывод повторяющегося отрезка, отвечающего за одну запись -->
								<?php   
								}
								wp_reset_postdata(); // сброс
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php 
	get_footer();
?>