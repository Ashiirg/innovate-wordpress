<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Innovate</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">

  <div class="header-wrap">
    <div class="logo">
      <a href="#">
        <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
        <img src="<?php echo $custom_logo__url[0] ?>" alt="logo">
      </a>
    </div>

    <?php wp_nav_menu(array(
      'theme_location' => 'top_menu',
      'container'      => null,
      'menu_class'     => 'nav',
      'menu_id'        => 'nav'
    )); ?>

    <div id="nav-icon3" class="hamburger">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  
  <div class="mob-menu">
    <?php wp_nav_menu(array(
      'theme_location' => 'top_menu',
      'container'      => null,
      'menu_class'     => 'mob-menu__list',
      'menu_id'        => 'mob-menu__list'
    )); ?>
  </div>

</header>


