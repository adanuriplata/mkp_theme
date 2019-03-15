<?php
	// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php get_header(); ?>;

<!-- HERO -->
<div class="section">
  <div class="container">
    <div class="columns is-variable is-7">
      <div class="column">
        <?php if(have_posts()) : the_post(); ?>
        <div class="container__main-post">
          <figure class="image">
            <?php the_post_thumbnail('small-thumbnail-2') ?>
          </figure>
          <div class="container__main-post__text">
            <div class="categoria is-size-7">
              <span class="icon"><i class="fas fa-tag"></i></span><span><?php the_category('single'); ?></span>
            </div>
            <div class="fecha is-size-7">
              <span class="icon"><i class="fas fa-calendar-day"></i></span> <?php the_date() ?>
            </div>
            <div class="titulo"><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></div>
            <div class="subtitle"><?php the_excerpt(); ?></div>
          </div>
        </div>
        <?php endif ?>
      </div>

      <div class="column">
        <div class="container__post-mini">
          <?php
            $query = new WP_Query( array( 'posts_per_page' => 3, 'offset' => 1 ) );
          ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="post-mini columns is-vcentered is-variable is-1 is-flex">
              <div class="column is-one-fifth is-one-fifth-mobile is-flex">
                <figure class="image is-80x80">
                  <?php the_post_thumbnail('square-thumbnail') ?>
                </figure>
              </div>
            <div class="column is-flex">
              <div>
                <h2 class="titulo"><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
                <div class="subtitle"><?php the_excerpt(); ?>
                  <div class="is-size-7 categoria is-primary-color">
                    <span class="icon is-primary-color"><i class="fas fa-tag"></i></span><span><?php the_category('single'); ?></span>
                  <span class="icon is-primary-color"><i class="fas fa-calendar-day"></i></span> <span class="is-primary-color"><?php echo get_the_date(); ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
	            <p><?php esc_html_e( 'Sin noticias que mostrar' ); ?></p>
          <?php endif; ?>
        </div>

          <?php
            $args = array(
              'theme_location' => 'category-menu',
              'container' => 'nav',
              'container_class' => 'container__categories is-uppercase columns',
              'menu_class' => 'column'
            );
            wp_nav_menu($args);
          ?>
      </div>

    </div>
  </div>
</div>

<!-- SUSCRIBE -->
<div class="section is-bg-white">
  <div class="container">

    <nav class="level">
  <!-- Left side -->
      <div class="level-left container__suscribe-main">
        <div class="level-item">
          <h3 class="subtitle is-3 is-uppercase">
            Aprende, Enterate, crece, conoce
          </h3>
        </div>
      </div>

  <!-- Right side -->
      <div class="level-right">
        <div class="level-item"><figure><img src="<?php $url = home_url()."/wp-content/themes/merkapalia/assets/img/raw/logo-mkp-letras-116-33.png" ; echo esc_url( $url ); ?> " alt="Logo" width="116"></figure></div>
        <div class="level-item"><a class="button is-link is-rounded">Suscribirme</a></div>
      </div>
    </nav>

    <hr>
  </div>
</div>

<!-- GRID -->
<div class="section">
  <div class="container">
    <div class="container__post-grid columns is-multiline is-8 is-variable">

      <?php
        $query = new WP_Query( array( 'posts_per_page' => 3, 'offset' => 4 ) );
      ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <?php the_post_thumbnail('grid-thumbnail') ?>
            </figure>
          </div>
          <div class="card-content">
            <div class="media-content">
              <p class="subtitle is-7">
                <span class="icon"><i class="fas fa-tag"></i></span><span><?php the_category('single'); ?></span>
              </p>
              <time datetime="2016-1-1"><span class="icon is-primary-color"><i class="fas fa-calendar-day"></i></span> <span class="is-primary-color"><?php echo get_the_date(); ?></span></time>
              <p class="title is-6"><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></p>
            </div>
          </div>
        </div>
      </div>

      <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
	            <p><?php esc_html_e( 'Sin noticias que mostrar' ); ?></p>
          <?php endif; ?>

      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-left">
                <figure class="image is-48x48">
                  <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-4">John Smith</p>
                <p class="subtitle is-6">@johnsmith</p>
              </div>
            </div>

            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a>@bulmaio</a>.
              <a href="#">#css</a> <a href="#">#responsive</a>
              <br>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
            </div>
          </div>
        </div>
      </div>

      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media-content">
              <p class="subtitle is-7">#categoria</p>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              <p class="title is-6">Chrome Extension Protects Againts JavaScript</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media-content">
              <p class="subtitle is-7">#categoria</p>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              <p class="title is-6">Chrome Extension Protects Againts JavaScript</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media-content">
              <p class="subtitle is-7">#categoria</p>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              <p class="title is-6">Chrome Extension Protects Againts JavaScript</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-one-third ad">
        <div class="ad_3x250">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media-content">
              <p class="subtitle is-7">#categoria</p>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              <p class="title is-6">Chrome Extension Protects Againts JavaScript</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media-content">
              <p class="subtitle is-7">#categoria</p>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              <p class="title is-6">Chrome Extension Protects Againts JavaScript</p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
          <div class="card-content">
            <div class="media-content">
              <p class="subtitle is-7">#categoria</p>
              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              <p class="title is-6">Chrome Extension Protects Againts JavaScript</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer grid -->

<div class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-two-thirds">
        <div class="column">
        <div class="container__post-mini">

          <div class="post-mini columns is-vcentered is-variable is-1 is-flex">
            <div class="column is-flex">
              <div class="titulo">Tell-A-Tool: Guide To Web Design And Development Tools</div>
            </div>
            <div class="column is-one-fifth is-one-fifth-mobile is-flex">
              <figure class="image is-80x80">
                <img src="<?php $url = home_url()."/wp-content/themes/merkapalia/assets/img/raw/image-post-80_80.jpg" ; echo esc_url( $url ); ?>" alt="imagen">
              </figure>
            </div>
          </div>

          <div class="post-mini columns is-vcentered is-variable is-1 is-flex">
            <div class="column is-flex">
              <div class="titulo">Tell-A-Tool: Guide To Web Design And Development Tools</div>
            </div>
            <div class="column is-one-fifth is-one-fifth-mobile is-flex">
              <figure class="image is-80x80">
                <img src="<?php $url = home_url()."/wp-content/themes/merkapalia/assets/img/raw/image2-post-80_80.jpg" ; echo esc_url( $url ); ?>" alt="imagen">
              </figure>
            </div>
          </div>
          <hr>
        </div>

      </div>
      </div>
      <div class="column is-one-third">
        <div class="box_newsletter has-text-centered has-text-light">
          <div class="box_newsletter__text">
            <p class="is-size-5">Newsletter semanal</p>
            <p>Suscribete</p>
          </div>
          <div class="box_newsletter__form has-text-centered">
            <form action="">
              <div class="field">
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="email" placeholder="Email input" value="Tu correo aqui">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>
              <div class="control has-text-centered">
                <button class="button is-link is-rounded">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-flex is-horizontal-center">
        <figure>
          <img src="http://speakercafe.com/wp-content/uploads/2016/01/banner-ad-728-x-90-your-ad-here.jpg" alt="">
        </figure>
      </div>
    </div>
    <hr>
  </div>
</div>
<?php get_footer(); ?>