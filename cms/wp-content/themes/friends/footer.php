<footer class="site-footer">
	<div class="inner-wrapper">
		<section class="site-footer__introduction">
			<a class="site-footer__logo-link" href="<?php echo get_home_url(); ?>">
				<img class="site-footer__logo-img" src="<?php bloginfo("template_directory"); ?>/assets/images/Logo_Friends-of-Juan-Diego-Florez-white.svg" alt="Logo Friends of Juan Diego Flórez"/>
			</a>
			<div class="site-footer__association">
				Verein zur Förderung von Musikunterricht und Gesangsausbildung von Kindern und Jugendlichen.
			</div>
			<div class="site-footer__social-media">
				<a class="site-footer__fb-link" href="facebook.com" target="_blank">
					<img class="site-footer__fb-logo" src="<?php bloginfo("template_directory"); ?>/assets/images/Logo_FB-white.svg" alt="Logo Facebook, Inc."/>
				</a>
			</div>
		</section>

		<section class="site-footer__contact-details">
			<div class="site-footer__contact-information">
				<div class="site-footer__contact-address">
					Alberichgasse 2<br/>
					1150 Vienna<br/>
					Austria
				</div>
				<div class="site-footer__contact-mail">
					<a href="mailto:kontakt@friendsofjuandiegoflorez.org">kontakt@friendsofjuandiegoflorez.org</a>
				</div>
				<div class="site-footer__contact-website">
					<a href="www.friendsofjuandiegoflorez.org" target="_blank">www.friendsofjuandiegoflorez.org</a>
				</div>
			</div>
			<div class="site-footer__contact-persons">
				<ul class="site-footer__contact-list">
					<li class="site-footer__contact-list-item">President: <br class="is-hidden-desktop" />Christine Brandstätter</li>
					<li class="site-footer__contact-list-item">Vice President: <br class="is-hidden-desktop" />Dr. Christine Rhomberg-Spiegel</li>
					<li class="site-footer__contact-list-item">Vice President: <br class="is-hidden-desktop" />Dr. Georg Prantl</li>
					<li class="site-footer__contact-list-item">Board Member: <br class="is-hidden-desktop" />Mag. Florentine Raabe-De Brabandere</li>
					<li class="site-footer__contact-list-item">Board Member: <br class="is-hidden-desktop" />Barbara-Drusila Almeida Carbonell</li>
				</ul>
			</div>

		</section>

		<section class="site-footer__association-details">
			<span class="zvr-number">ZVR Register of Associations’ number: <br class="is-hidden-desktop" />267735576</span>
			<span class="iban">IBAN: AT64 2011 1826 6942 3100</span>
			<span class="bic">BIC: GIBAATWWXXX</span>
		</section>

		<section class="site-footer__navigation-area">
			<div class="site-footer__additional-data">
				<nav class="site-footer__navigation">
					<ul class="site-footer__navigation-list">

					<?php
						$defaults = array(
							'walker'         => new FooterMenuNavwalker(),
							'menu'           => 'Footermenü',
							'theme_location' => 'nav-footer-menu',
							'depth'          => 1,
							'container'      => FALSE,
							'container_class'   => '',
							'menu_class'     => '',
							'items_wrap'     => '%3$s',
							'fallback_cb'		=>	'NavWalker::fallback'
						);
						wp_nav_menu( $defaults );
					?>

					</ul>
				</nav>

				<p class="site-footer__copyright">
					©&nbsp;Copyright&nbsp;2023. <span class="wordwrap"></span>
					All rights reserved.
				</p>
			</div>
		</section>
	</div>
</footer>

	<?php wp_footer();?>


	<!-- === START SCRIPTS AREA === -->

	<!-- General Scripts -->
	<!-- <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->

	<!-- Hamburger Menu Toggle -->
	<script>
		var navigation = document.querySelector(".main-navigation")
		var hamburger = document.querySelector(".burger-menu")

		navigation.onclick = function () {
			this.classList.toggle("is-active")
		}

		hamburger.onclick = function () {
			this.classList.toggle("checked")
		}
	</script>

	<!-- Accordion Functionality -->
	<script>
		const items = document.querySelectorAll(".accordion button");

		function toggleAccordion() {
			const itemToggle = this.getAttribute('aria-expanded');

			for (i = 0; i < items.length; i++) {
				items[i].setAttribute('aria-expanded', 'false');
			}

			if (itemToggle == 'false') {
				this.setAttribute('aria-expanded', 'true');
			}
		}

		items.forEach(item => item.addEventListener('click', toggleAccordion));
	</script>


	<!-- Slick Sliders -->
	<script type="text/javascript">

		jQuery('.programs-slider__container').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
			speed: 1500,
			fade: true,
			cssEase: 'linear'
		});

	</script>


	<!--
	<script type="text/javascript">

		jQuery('.single-item').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 800,
		});

	</script>
	-->



	<!-- Testimonial Sliders -->
	<script type="text/javascript">

		jQuery('.testimonials-slider__container').slick({
			dots: false,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 800,
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,

			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						arrows: true,
					}
				},
				{
					breakpoint: 791,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						arrows: true,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
						centerPadding: '40px',
					}
				}
			]
		});

	</script>


	</body>
</html>