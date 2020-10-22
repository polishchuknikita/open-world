<?php 
	/*
		Template Name: О нас
		Template Post Type: post, page, product
	*/
	get_header();
?>
<?php get_template_part('template-parts/header-inner') ?>
	<section class="about-content" id="about-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="about-content__menu">
						<div class="about-content__wr">
							<div class="about-left">
								<h2 class="about-title">
									О нас
								</h2>
								<?php if( have_rows('about') ): ?>
									<?php while( have_rows('about') ): the_row(); 
										// vars
										$abouttext = get_sub_field('abouttext');
										?>
											<p class="about-text">
												<?php echo $abouttext; ?>
											</p>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="about-right">
								<img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg">
							</div>
						</div>
						<div class="about-content__contact">
							<h2 class="about-content__contact-title">
								Контактная информация
							</h2>
							<ul class="about-content__contact-menu">
								<?php if( have_rows('contact') ): ?>
									<?php while( have_rows('contact') ): the_row(); 
										// vars
										$contacttext = get_sub_field('contacttext');
										$contacttext2 = get_sub_field('contacttext2');
										?>
											<li class="about-content__contact-item">
												<p class="about-content__contact-left">
													<?php echo $contacttext; ?>
												</p>
												<p class="about-content__contact-right">
													<?php echo $contacttext2; ?>
												</p>
											</li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php 
	get_footer();
?>