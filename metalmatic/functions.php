<?php


// Linking javascript files to theme

function metalmatic() {
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/src/js/script.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style('metalmaticcss-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '5.13.0', 'all');
    wp_enqueue_script('followandy-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('followandy-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);

}
add_action( 'wp_enqueue_scripts', 'metalmatic' );

// Creating Custom Post Types

 // add_action('init', 'create_custom_posttypes');

// function create_custom_posttypes() {
//     $types = array(

//         // Diensten
//         array('the_type' => 'diensten',
//               'single' => 'Dienst',
//               'plural' => 'Diensten'),

//         array('the_type' => 'jobs',
//               'single' => 'Job',
//               'plural' => 'Jobs')
//     );

//     foreach ($types as $type) {
//         $the_type = $type['the_type'];
//         $single = $type['single'];
//         $plural = $type['plural'];
        
//         $labels = array(
//             'name' => _x($plural, 'post_type general name'),
//             'singular_name' => _x($single, 'post type singular name'),
//             'add_new' => _x('Voeg nieuwe toe', $single),
//             'add_new_item' => __('Voeg nieuwe ' . $single . ' toe'),
//             'edit_item' => __('Bewerk ' . $single),
//             'new_item' => __('Nieuwe ' . $single),
//             'view_item' => __('Bekijk ' . $single),
//             'search_items' => __('Zoek ' . $plural),
//             'not_found' => __('Geen ' . $plural . ' gevonden'),
//             'not_found_in_trash' => __('Geen ' . $plural . ' gevonden in prullenmand'),
//             'parent_item_colon' => ''
//         );

//         $args = array(
//             'labels' => $labels,
//             'public' => true,
//             'publicly_queryable' => true,
//             'show_ui' => true,
//             'query_var' => true,
//             'rewrite' => true,
//             'capability_type' => 'post',
//             'hierarchical' => true,
//             'supports' => array(
//                 'title',
//                 'editor',
//                 'thumbnail',
//                 'custom-fields'
//             ),
//             'taxonomies' => array(
//                 'post_tag',
//                 'category',
//             )
//         );
//         register_taxonomy_for_object_type('category', 'diensten');
//         register_taxonomy_for_object_type('post_tag', 'diensten');
//         register_taxonomy_for_object_type('category', 'jobs');
//         register_taxonomy_for_object_type('post_tag', 'jobs');
        
//         register_post_type($the_type, $args);
//     }
// } 

// Adding option page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// using theme logo

add_theme_support( 'custom-logo' );

// Widgets

// function haven_genk_widgets_init() {
 
//     register_sidebar( array(
//         'name' => __( 'Contact blokje met nav', 'haven_genk' ),
//         'id' => 'small-contact',
//         'description' => __( 'Contact blokje met nav', 'haven_genk' ),
//         'before_widget' => '<div id="%1$s" class="%2$s">',
//         'after_widget' => '</div>',
//     ) );

// }
 
// add_action( 'widgets_init', 'haven_genk_widgets_init' );

// Registering navs

function metalmatic_custom_new_menu() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Hoofdmenu' ),
        'menu-diensten' => __( 'Diensten menu' ),
        'menu-service' => __( 'Service menu' ),
         // 'mobile-menu' => __( 'Smartphone menu' ),
      )
    );
  }
  add_action( 'init', 'metalmatic_custom_new_menu' );

  // Haven Genk posts loop

	// function haven_genk_get_related_posts( $post_id, $related_count, $args = array() ) {
	// 	$args = wp_parse_args( (array) $args, array(
	// 		'orderby' => 'rand',
	// 		'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
	// 	) );

	// 	$related_args = array(
	// 		'post_type'      => get_post_type( $post_id ),
	// 		'posts_per_page' => $related_count,
	// 		'post_status'    => 'publish',
	// 		'post__not_in'   => array( $post_id ),
	// 		'orderby'        => $args['orderby'],
	// 		'tax_query'      => array()
	// 	);

	// 	$post       = get_post( $post_id );
	// 	$taxonomies = get_object_taxonomies( $post, 'names' );

	// 	foreach ( $taxonomies as $taxonomy ) {
	// 		$terms = get_the_terms( $post_id, $taxonomy );
	// 		if ( empty( $terms ) ) {
	// 			continue;
	// 		}
	// 		$term_list                   = wp_list_pluck( $terms, 'slug' );
	// 		$related_args['tax_query'][] = array(
	// 			'taxonomy' => $taxonomy,
	// 			'field'    => 'slug',
	// 			'terms'    => $term_list
	// 		);
	// 	}

	// 	if ( count( $related_args['tax_query'] ) > 1 ) {
	// 		$related_args['tax_query']['relation'] = 'OR';
	// 	}

	// 	if ( $args['return'] == 'query' ) {
	// 		return new WP_Query( $related_args );
	// 	} else {
	// 		return $related_args;
	// 	}
	// }

    // Pagination

    function custom_pagination($numpages = '', $pagerange = '', $paged='') {
        if (empty($pagerange)) {
            $pagerange = 2;
        }

        global $paged;
            if (empty($paged)) {
                $paged = 1;
            }
            if ($numpages == '') {
                global $wp_query;
                $numpages = $wp_query->max_num_pages;
                if(!$numpages) {
                    $numpages = 1;
                }
            }

            $pagination_args = array(
                'base'            => get_pagenum_link(1) . '%_%',
                'format'          => 'page/%#%',
                'total'           => $numpages,
                'current'         => $paged,
                'show_all'        => False,
                'end_size'        => 1,
                'mid_size'        => $pagerange,
                'prev_next'       => True,
                'prev_text'       => __('Vorige'),
                'next_text'       => __('Volgende'),
                'type'            => 'plain',
                'add_args'        => false,
                'add_fragment'    => ''
            );

            $paginate_links = paginate_links($pagination_args);

            if ($paginate_links) {
                echo "<nav class='custom-pagination column'>";
                    echo $paginate_links;
                echo "</nav>";
            }
        }

// Removing width and height attributes from thumbnails

function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
 
add_filter( 'post_thumbnail_html', 'remove_img_attr' );