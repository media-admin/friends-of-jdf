<div class="faq__container">
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post_type' => 'faq',
		);

	$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="faq__accordion accordion">
				<div class="faq__accordion-item accordion-item">
					<button id="" aria-expanded="false"><span class="faq__accordion-title accordion-title"><?php the_title();?></span><span class="icon" aria-hidden="true"></span></button>
					<div class="faq__accordion-content accordion-content">
						<p><?php the_content();?></p>
					</div>
				</div>
			</div>

	<?php endwhile; ?>

	<?php
	wp_reset_postdata();
	?>

</div>