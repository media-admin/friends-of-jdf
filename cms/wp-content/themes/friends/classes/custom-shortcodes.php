<?php

function shortcode_faqs() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_faqs');
	return ob_get_clean();
}

add_shortcode( 'shortcode_faqs', 'shortcode_faqs' );


function shortcode_programs_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_programs_overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_programs_overview', 'shortcode_programs_overview' );


function shortcode_success_overview() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_success_overview');
	return ob_get_clean();
}

add_shortcode( 'shortcode_success_overview', 'shortcode_success_overview' );


function shortcode_slider_programs() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_slider_programs');
	return ob_get_clean();
}

add_shortcode( 'shortcode_slider_programs', 'shortcode_slider_programs' );


function shortcode_slider_testimonials() {
	ob_start();
	get_template_part( 'shortcodes/shortcode_slider_testimonials');
	return ob_get_clean();
}

add_shortcode( 'shortcode_slider_testimonials', 'shortcode_slider_testimonials' );


function show_tags()
{
	$post_tags = get_the_tags();
	$separator = ' | ';
	if (!empty($post_tags)) {
		foreach ($post_tags as $tag) {
			$output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
		}
		return trim($output, $separator);
	}
}


/* =================== DELETE ME OR NOT ???? =================== */

/* TODO - May be deleted */

function all_posts_shortcode() {

	// Parameter für Posts
	$args = array(
		'category' => '',
		'numberposts' => 6,
		'post_status' => 'publish',
		'orderby'   => 'id',
		'order' => 'ASC',
	);

	// Posts holen
	$posts = get_posts($args);

	// Inhalte sammeln
	$content = '';
	foreach ($posts as $post) {

		$content .= '<div class="card column is-one-third">';
		$content .= '<div class="card-image">';
		$content .= '<a class="" href="'.get_permalink($post->ID).'">';
		$content .= '<figure class="image">';
		$content .= '<img  alt="Beitragsbild" src="'.get_the_post_thumbnail_url($post->ID, 'full').'"';
		$content .= '</figure>';
		$content .= '</a>';
		$content .= '</div>';
		$content .= '<div class="card-content">';
		$content .= '<div class="media">';
		$content .= '<div class="media-content">';
		$content .= '<p class="author is-6">Veröffentlicht am <span class="meta__date-published"><time datetime="d.m.Y">'.get_post_time('d.m.Y', $post->ID ).'</time></span></p>';
		$content .= '<a class="" href="'.get_permalink($post->ID).'"><p class="title is-4">'.$post->post_title.'</p></a>';
		$content .= '<p class="author is-6">Verfasser <span class="meta__author">'.get_the_author($post->ID).'</span></p>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '<div class="content">';
		$content .= '<small class="tags">';
		$content .= '<div class="tags">';
		$content .= '<code class="tag is-danger">';
		$content .= '<i class="fas fa-tags"></i>';
		$content .= '</code>';

		$post_tags = get_the_tags($post->ID);


		if (!empty($post_tags)) {
			foreach ($post_tags as $tag) {
				$content .= '<span class="tag"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
			}
		}

		$content .= '</div>';
		$content .= '</small>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';

	}

	// Inhalte übergeben
	return $content;

}

add_shortcode( 'all_posts', 'all_posts_shortcode' );

/* =================== DELETE ME OR NOT ???? =================== */








?>