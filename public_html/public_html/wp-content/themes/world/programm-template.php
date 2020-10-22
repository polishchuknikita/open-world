<?php 
	/*
		Template Name: Шаблон записи программ
		Template Post Type: post, page, product
	*/
	get_header();
?>
<?php get_template_part('template-parts/header-inner') ?>
	<section class="programm-template" id="programm-template">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="programm-content">
						<h2 class="programs-title program-content__title">
							<?php echo esc_html( get_the_title() ); ?>
						</h2>
						<div class="programm-content__menu">
							<div class="programm-content__left">
								<h3 class="programm-content__left-title">
									<?php the_field('programm-document'); ?>
								</h3>
								<p class="programm-content__left-desc">
									<?php the_field('programm-text'); ?>
								</p>
								<h3 class="programm-content__left-subtitle">
									<?php the_field('programm-relevance'); ?>
								</h3>
								<p class="programm-content__left-subdesc">
									<?php the_field('programm-text2'); ?>
								</p>
							</div>
							<div class="programm-content__right">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="programm-content__table">
							<ul class="programm-content__table-menu">
								<li class="programm-content__table-item programm-content__table-item1">
									<span class="programm-content__table-number">
										№ п/п
									</span>
									<span class="programm-content__table-name">
										Навазние модуля
									</span>
									<span class="programm-content__table-hour">
										Длительность, часы
									</span>
									<span class="programm-content__table-control">
										Форма контроля
									</span>
								</li>
								<?php
									// check if the repeater field has rows of data
									if( have_rows('programm-table') ):
									 	// loop through the rows of data
									    while ( have_rows('programm-table') ) : the_row(); ?>
									        <li class="programm-content__table-item">
												<span class="programm-content__table-number">
													<?php echo get_sub_field('programm-table_num'); ?>
												</span>
												<span class="programm-content__table-name">
													<?php echo get_sub_field('programm-table_module'); ?>
												</span>
												<span class="programm-content__table-hour">
													<?php echo get_sub_field('programm-table_hour'); ?>
												</span>
												<span class="programm-content__table-control">
													<?php echo get_sub_field('programm-table_control'); ?>
												</span>
											</li>
									    <?php endwhile;
									else :
									    // no rows found
									endif;
								?>
							</ul>
						</div>
						<div class="programm-content__form contact-form__menu">
							<h3 class="programm-content__form-title">
								Оставьте заявку на обучение
							</h3>
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