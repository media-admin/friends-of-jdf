<section div class="testimonials-slider">
	<div class="testimonials-slider__container wrapper">
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post_type' => 'testimonial',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();

			$program_slider_img = get_field('testimonials_slider_img'); ?>

			<article class="testimonials-slider__card">
				<div class="testimonials-slider__card-container wrapper">
					<div class="testimonials-slider__img-container">
						<?php the_post_thumbnail('full', ['class' => 'testimonials-slider__img']); ?>
					</div>
					<div class="testimonials-slider__content">
						<h3 class="testimonials-slider__name"><?php the_title();?></h3>
						<p class="testimonials-slider__function"><?php the_field('testimonials_function'); ?></p>
						<p class="testimonials-slider__excerpt"><?php the_excerpt();?></p>
						<p class="testimonials-slider__content"><?php the_content();?></p>
					</div>
				</div>
			</article>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</div>
</section>