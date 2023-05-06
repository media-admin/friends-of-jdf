<section div class="programs-overview">
	<div class="programs-overview__container wrapper">
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'category_name' => 'programme',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<article class="programs-overview__card card">
				<div class="programs-overview__card-container card__container wrapper">
					<a class="programs-overview__link" href="<?php the_permalink();?>">
						<div class="programs-overview__thumbnail-container">
							<?php the_post_thumbnail('full', ['class' => 'programs-overview__thumbnail card__thumbnail']); ?>
						</div>
						<div class="programs-overview__content card__content">
							<h3 class="programs-overview__title card__title"><?php the_title();?></h3>
							<div class="programs-overview__excerpt">
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