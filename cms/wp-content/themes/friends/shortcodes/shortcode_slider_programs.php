<section div class="programs-slider">
	<div class="programs-slider__container wrapper">
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'category_name' => 'programme',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();

			$program_slider_img = get_field('program_slider_img'); ?>

			<article class="programs-slider__card">
				<div class="programs-slider__card-container wrapper">
					<a class="programs-slider__link" href="<?php the_permalink();?>">
						<div class="programs-slider__img-container">
							<img class="programs-slider__img lazyload" src="<?php echo esc_url($program_slider_img['url']); ?>" alt="<?php echo esc_attr(['alt']); ?>" />
						</div>
						<div class="programs-slider__content">
							<h3 class="programs-slider__title"><?php the_title();?></h3>
						</div>
					</a>
				</div>
			</article>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</div>
</section>