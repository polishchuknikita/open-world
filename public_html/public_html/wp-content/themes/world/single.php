<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package world
 */

get_header();
?>
<?php get_template_part('template-parts/header-inner') ?>
	<section class="programm-template" id="programm-template">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="programm-content news-single-content">
						<div class="programm-content__menu">
							<div class="news-content__left">
								<h2 class="news-title">
									<?php echo esc_html( get_the_title() ); ?>
								</h2>
								<?php the_field('news-single-text'); ?>
							</div>
							<div class="news-content__right">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
