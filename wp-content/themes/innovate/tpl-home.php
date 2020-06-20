<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<section class="head">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="head-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/single_logo.svg" alt="img" class="head__logo-img">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo_title.svg" alt="img" class="head__logo-title">
        </div>

      </div>
    </div>
  </div>
</section>

<section class="features" id="features">
  <div class="features-item">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/smart.svg" alt="img" class="features-image">
    <span class="features-title">Smart</span>
    <p class="features-text">Deliver automated and actionable insights with Artificial Intelligence</p>
  </div>
  <div class="features-item">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/sustainable.svg" alt="img" class="features-image">
    <span class="features-title">Sustainable</span>
    <p class="features-text">Reshaping your Sustainability Goals</p>
  </div>
  <div class="features-item">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/secure.svg" alt="img" class="features-image">
    <span class="features-title">Secure</span>
    <p class="features-text">Enabling Digital Assurance</p>
  </div>
</section>

<section class="about-slider">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="about-slider__wrap">

        <?php 
          $posts = get_posts( array(
            'post_type'   => 'post',
            'category'    => 'about_slider',
            'orderby'     => 'date',
	          'order'       => 'ASC',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $posts as $post ){ 
            setup_postdata($post);
        ?>

          <div class="about-slider__item">
            <div class="about-slider__item-text">
              <span><?php the_title() ?></span>
              <p><?php the_content() ?></p>
            </div>
            <div class="about-slider__item-img">
              <img src="<?php the_post_thumbnail_url('large') ?>" alt="iMac">
            </div>
          </div>

        <?php } wp_reset_postdata(); // end foreach ?>

        </div>
        

      </div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="testimonials-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/testimonials-dots.png" alt="img" class="testimonials-dots">

          <div class="testimonials-slider">

          <?php
            $posts = get_posts( array(
              'orderby'     => 'date',
              'order'       => 'DESC',
              'post_type'   => 'testimonial',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
          ?>

            <div class="testimonials-item">
              <span class="testimon-item__name"><?php the_title() ?></span>
              <p class="testimon-item__company"><?php the_field('company') ?></p>
              <hr>
              <p class="testimon-item__text"><?php the_content() ?></p>
            </div>

          <?php } wp_reset_postdata(); // end foreach ?>

          </div>

          <div class="testimonials-controls">
            <span class="testimonials-left"></span>
            <div class="testimonials__slider-dots"></div>
            <span class="testimonials-right"></span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="contact-wrap">
          <div class="title-bg">
            <span class="h2-bg">contact us</span>
            <h2>contact us</h2>
          </div>

          <?php echo do_shortcode( '[contact-form-7 id="15" title="Contact form" html_class="contact-form"]' ) ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>