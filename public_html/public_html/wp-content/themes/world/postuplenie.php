<?php 
	/*
		Template Name: Поступление
		Template Post Type: post, page, product
	*/
	get_header();
?>
<?php get_template_part('template-parts/header-inner') ?>
	<section class="receive" id="receive">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="receive-menu">
						<div class="receive-menu__left">
							<h2 class="receive-title">
								Поступление
							</h2>
							<h3 class="receive-menu__left-title">
								Описание
							</h3>
							<?php the_field('receive-desc'); ?>
							<h3 class="receive-menu__left-subtitle">
								Правила оферты
							</h3>
							<?php the_field('receive-offer'); ?>
						</div>
						<div class="receive-menu__right">
							<h3 class="receive-menu__right-title">
								Заявление
							</h3>
							<div class="receive-menu__right-form contact-form__menu">
								<?php echo do_shortcode('[contact-form-7 id="317" title="Заявление"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php 
	get_footer();
?>