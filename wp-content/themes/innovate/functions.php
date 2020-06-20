<?php

add_action( 'wp_enqueue_scripts', 'theme_style');
add_action( 'after_setup_theme', 'theme_register_nav_menu');

function theme_style() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/main.css');

  wp_deregister_script('jquery');
  wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', null, null, null);
}

function theme_register_nav_menu() {
  register_nav_menu('top_menu', 'Меню в шапке');

  add_theme_support( 'custom-logo', [
    'height'      => 190,
    'width'       => 190,
    'flex-width'  => false,
    'flex-height' => false,
    'header-text' => '',
  ] );

  add_theme_support('post-thumbnails', array('post', 'testimonial'));
}

add_action('init', 'register_testimonial_posts');
function register_testimonial_posts(){
	register_post_type('testimonial', array(
		'labels'             => array(
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'add_new'            => 'Добавить отзыв',
			'add_new_item'       => 'Добавление отзыва',
			'edit_item'          => 'Редактирование отзыва',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Смотреть отзыв',
			'search_items'       => 'Искать отзыв',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'supports'           => array('title','editor','thumbnail')
	) );
}

?>