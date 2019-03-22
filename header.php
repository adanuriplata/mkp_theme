	<?php
/**
 * Merkapalia Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package WP
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="has-navbar-fixed-top">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php get_the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav class="navbar is-fixed-top">
    <div class="container">
    <?php if (has_custom_logo()) {?>
      <div class="navbar-brand"><?php the_custom_logo(); ?>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
    <?php }else{ ?>
      <div class="navbar-brand">
        <a href="<?php echo site_url(); ?>" class="navbar-item">
          <img src="<?php $url = home_url()."/wp-content/themes/merkapalia/assets/img/logo-mkp-blog.png" ; echo esc_url( $url ); ?> " alt="Logo" width="242">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <?php } ?>

      <div class="navbar-menu">
        <div class="navbar-end">
        <?php
          $args = array(
            'theme_location' => 'main-menu',
            'menu_class' => 'navbar-end',
            'link_class'  => 'navbar-item',
            'container' => false,
            'echo' => false,
            'items_wrap' => '%3$s',
            'depth' => 0,
          );
          echo strip_tags(wp_nav_menu( $args ), '<a>' );
        ?>
        </div>
        <!--
            <a href="#" class="navbar-item">INICIO</a>
            <a href="#" class="navbar-item">BLOG</a>
            <a href="#" class="navbar-item">CONTACTO</a>
            <a href="#" class="navbar-item">BLOG</a>
         -->
      </div>
    </div>
  </nav>