<?php
/* WIDGETS */

if (function_exists('register_sidebar'))
{
	register_sidebar(array(
		'name'          => 'Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		));
}


add_filter('the_content_more_link', 'filter_more_link');

function filter_more_link( $link ) {
	return ' <div class="row"><a class="read-more btn btn-primary" href="'. get_permalink( get_the_ID() ) . '" title="Continue lendo '.get_the_title().'">Continuar lendo</a></div>';
}


add_theme_support( 'post-thumbnails');

//Custom WordPress Login Logo by WpTotal.com.br
function cutom_login_logo() {
	echo "<style type=\"text/css\">
	body.login div#login h1 a {
		background-image: url(".get_bloginfo('template_directory')."/images/ops_logo_gorda.png);
		-webkit-background-size: auto;
		background-size: auto;
		margin: 0 0 25px;
		width: 320px;
		background-size: 96px;
	}
</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );

function wordpress_pagination() {
	global $wp_query;

	$big = 999999999;

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_text' => __( '<<', 'textdomain' ),
	    'next_text' => __( '>>', 'textdomain' ),
		) );
}


?>