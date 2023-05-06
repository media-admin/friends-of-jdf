<section div class="success-overview">
	<div class="success-overview__container wrapper">
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'category_name' => 'erfolgsgeschichten',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<article class="success-overview__card card">
				<div class="success-overview__card-container card__container wrapper">
					<a class="success-overview__link" href="<?php the_permalink();?>">
						<div class="success-overview__thumbnail-container">
							<?php the_post_thumbnail('full', ['class' => 'success-overview__thumbnail']); ?>
						</div>
						<div class="success-overview__content">
							<h3 class="success-overview__title"><?php the_title();?></h3>
							<div class="success-overview__excerpt">
								<?php the_excerpt() ?>
							</div>
						</div>
					</a>
				</div>
			</article>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</div>
</section>