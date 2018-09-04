<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                          Enqueue Scripts & Stylsheets                       *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// Stylesheets & Javascript
function flkr_scripts() {
    // Load Main Stylesheet
    wp_enqueue_style( 'flkr-style', get_stylesheet_uri() );
} 
add_action( 'wp_enqueue_scripts', 'flkr_scripts' );

// Fonts
function flkr_fonts() {
    // Google Fonts "Roboto" & "Lato"
    wp_register_style( 'flkr_google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700,900' );
    wp_enqueue_style( 'flkr_google_fonts' );
}
add_action( 'wp_print_styles', 'flkr_fonts' );

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                               Add Theme Support                             *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array( 'link', 'status', 'aside', 'image', 'audio' ) );

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                                Custom Fuctions                              *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
 // Get post category as a string for display purposes
function flkr_post_category( $post = null ) {
	if ( $post = get_post( $post ) ) {
	
		foreach( ( get_the_category( $post ) ) as $category ) {
		
 			switch ( $category->name ) {
 			
 				case "Linked":
 					return "linked";
 					break;
 				case "Micro.blog":
 					return "microblog";
 					break;	
 				case 'Cross Post':
 					return 'crosspost';
 					break;
 				default:
 					return "article";
 					break;
 					
 			}	
 				
 		}
 		
	}
	
}

// Print external-link (for use in linked & cross-posts)
function flkr_the_external_link( $post = null ) {
	$permalink = get_permalink( $post );
	$postKeys = get_post_custom_keys( $post );
	$externalLink = array();

	if ( !empty( $postKeys ) ) {

		$externalLink = get_post_custom_values( 'external-link' );

		if ( empty( $externalLink ) ) {
			return esc_url( $permalink );
		} else {
			return esc_url( $externalLink[0] );
		}
	} else {
		return esc_url( $permalink );
	}
}

function flkr_the_crosspost_source( $post = null ) {
	$externalLink = flkr_the_external_link( $post );
	preg_match('/https?:\/\/([^\/]+)\//i', $externalLink, $matches);
  	$host = $matches[1];
  	
  	preg_match('/[^.]+\.[^.]+$/', $host, $matches);
  	$domain = $matches[0];
	
	switch ( $domain ) {
		case "turfshowtimes.com":
			return "Turf Show Times";
			break;
		default:
			return "Dragonami";
			break;
	}
}

// Print separation horizontal rule in between posts of different categories in index
function flkr_print_category_break( $post = null, $prevCategory ) {
	if ( $post = get_post( $post )) {
	    if ( flkr_post_category( $post ) != $prevCategory && $prevCategory != null ) {
			echo "<hr>";
		}
	}
}

// Display Month in Archive Page
function flkr_display_archive_month( $currentDate, $lastDate ) {
	if ( $currentDate != $lastDate ) {
		echo '<div class="archive-dateline"><h2>'.$currentDate.'</h2></div>';
		return $currentDate;
	} else {
		return $lastDate;
	}
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                                 Fix Jetpack                                 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

/* * * * * * * * * * * * * * Fix Jetpack Markdown * * * * * * * * * * * * * * * */
// Override Jetpack Default Line Break Behavior for Markdown
remove_filter( 'the_content', 'wpautop' ); // Remove default line break behavior

// Define correct way to deal with line breaks in standard Markdown fashion
function md_style_linebreaks( $content ) {
	$content = wpautop( $content, false );
	$content = str_replace( "  /n", "<br />", $content );

	return $content;
}
add_filter( 'the_content', 'md_style_linebreaks' );

// remove WP admin bar for all users
add_filter( 'show_admin_bar', '__return_false' );