

<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

  <main class="main-single-post">
    <div class="section single-post__hero">
      <div class="container">
        <div class="">
          <h1 class="is-size-3 is-size-1-desktop"><?php the_title(); ?></h1>
          <div class="is-size-5 subtitle is-size-4-desktop"><?php the_excerpt(); ?></div>
        </div>
        <div class="card-content">
          <div class="media is-align-items-center">
            <div class="media-left">
              <figure class="image is-48x48">
                <img class="is-rounded" src="https://versions.bulma.io/0.7.0/images/placeholders/96x96.png" alt="Placeholder image">
              </figure>
            </div>
          <div class="media-content">
            <p class="title is-6"><?php the_author(); ?></p>
            <p class="subtitle is-7"><?php the_date(); ?></p>
          </div>
        </div>
      </div>k
    </div>
    <div class="single-post__content">
      <div class="single-post__content__thumbnail is-flex is-horizontal-center">
        <figure class="image">
          <?php the_post_thumbnail(); ?>
        </figure>
      </div>
      <div class="single-post__content__theContent">
       <?php the_content(); ?>
      </div>
    </div>
  </main>
 <?php endwhile ?>
	<?php get_footer(); ?>