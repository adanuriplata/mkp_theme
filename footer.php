	<?php
/**
 * Footer
 *
 * The footer template.
 *
 * @since   1.0.0
 * @package WP
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
wp_footer(); ?>

	<footer class="footer">
		<div class="container">
			<div class="columns">
				<div class="column">
					<div class="columns">
						<div class="column">
							<h5 class="is-size-6">Servcios</h5>
							<ul class="is-size-7">
								<li>Growth Marketing</li>
								<li>Analytica Web</li>
								<li>Desarrollo Web</li>
								<li>Wordpress</li>
							</ul>
						</div>
						<div class="column">
							<h5 class="is-size-6">Recursos</h5>
							<ul class="is-size-7">
								<li>Blog</li>
								<li>Ebooks</li>
								<li>Desarrollo Web</li>
								<li>Wordpress</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="column has-text-centered">
					<h5 class="is-size-6">Lugares</h5>
					<ul class="is-size-7">
						<li>Aviso de Privacidad</li>
						<li>Acerca de</li>
						<li>Soporte</li>
					</ul>
				</div>
				<div class="column is-flex is-align-center is-flex-wrap has-text-right">
					<div class="">
						Merkapalia GM Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non fuga unde est voluptate
					</div>
					<div class="">
						<ul class="is-size-7">
							<li class="is-inline">Facebook</li>
							<li class="is-inline">Twitter</li>
							<li class="is-inline">Instagram</li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="footer__copy">
		<div class="container">
			<div class="columns">
				<div class="column is-size-7 is-flex is-space-between is-align-items-center">
					<div class="logo">
						<div class="">
    					<?php if (has_custom_logo()) {?>
      				<div class=""><?php the_custom_logo(); ?></div>
    					<?php }else{ ?>
          			<a href="<?php echo site_url(); ?>">
            			<img src="<?php $url = home_url()."/wp-content/themes/merkapalia/assets/img/merkapalia-footer-133-24-2.png" ; echo esc_url( $url ); ?> " alt="Logo" width="133">
          			</a>
    					<?php } ?>
    				</div>
					</div>
					<div class="year ">© 2019  Derechos Reservados Merkapalia</div>
					<div class="love">Don’t forget to give credit 💙</div>
				</div>
			</div>
		</div>
	</div>
<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
</body>
</html>