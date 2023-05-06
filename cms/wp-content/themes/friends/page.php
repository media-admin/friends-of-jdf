<?php
	if(is_front_page()) {
	 get_header('home');
	}
	else {
	 get_header();
	}
	 wp_head();
?>

				<?php the_content(); ?>
			</div>
		</div>
		</div>
	</main>

<?php get_footer(); ?>