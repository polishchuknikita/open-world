<?php 
	/*
		Template Name: Профессиональная подготовка
		Template Post Type: post, page, product
	*/
	get_header();
?>
<?php get_template_part('template-parts/header-inner') ?>

	<section class="professional-programms" id="professional-programms">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="programs-title programs-all__title">
						Профессиональная переподготовка
					</h2>
				</div>
				<div class="col-12">
					<div class="professional-programms__menu">
						<?php 
							    $args = array(
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
									<div class="programs-slider__item professional-programms__item">
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