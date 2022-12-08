

<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_sidebar(array(
    'name'=>'Top Right Logo',
    'id'=>'bdlogo',
    'before_widget' => ' ',
	'after_widget' => " ",
) );
register_sidebar(array(
    'name'=>'Hero Top',
    'id'=>'hertop',
    'before_widget' => ' ',
	'after_widget' => " ",
) );
register_sidebar(array(
    'name'=>'Bottom Image',
    'id'=>'hbimg',
    'before_widget' => ' <div id="%1$s" class="widget %2$s">',
	'after_widget' => " </div>\n",
) );
register_sidebar(array(
    'name'=>'Bottom Body',
    'id'=>'hbbody',
    'before_widget'  => '',
		'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Bottom Image-2',
    'id'=>'hbimg2',
    'before_widget' => ' <div id="%1$s" class="widget %2$s">',
	'after_widget' => " </div>\n",
) );
register_sidebar(array(
    'name'=>'Bottom Body-2',
    'id'=>'hbbody2',
    'before_widget'  => '',
		'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Bottom Image-3',
    'id'=>'hbimg3',
    'before_widget' => ' <div id="%1$s" class="widget %2$s">',
	'after_widget' => " </div>\n",
) );
register_sidebar(array(
    'name'=>'Bottom Body-3',
    'id'=>'hbbody3',
    'before_widget'  => '',
		'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'photo Image-1',
    'id'=>'p_img1',
    'before_widget' => ' <div id="%1$s" class="widget %2$s">',
	'after_widget' => " </div>\n",
) );
register_sidebar(array(
    'name'=>'photo Body-1',
    'id'=>'p_body_1',
    'before_widget'  => '',
		'after_widget'   => "",
) );

register_nav_menus( array(
    'TM'=>'primary'
) );