<?php
/**
 * Veleučilište u Šibeniku functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Veleučilište_u_Šibeniku
 */

if ( ! function_exists( 'vus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vus_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Veleučilište u Šibeniku, use a find and replace
	 * to change 'vus' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'vus', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'home-post_thumbnail', 320);
	add_image_size( 'post-content_thumbnail', 1024);
	add_image_size( 'single-post_thumbnail', 640);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'vus' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vus_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // vus_setup
add_action( 'after_setup_theme', 'vus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vus_content_width', 640 );
}
add_action( 'after_setup_theme', 'vus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vus' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'vus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vus_scripts() {
	wp_enqueue_style( 'vus-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js');

	wp_enqueue_script( 'vus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'vus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vus_scripts' );

// Function to return the link to the category
function getCatUrl($categoryName) {
    $categoryID = get_cat_ID($categoryName);
    $categoryLink = get_category_link($categoryID);
		echo esc_url($categoryLink);
}

/*
	* Display the Read More link when using the_excerpt()
	*/
function new_excerpt_more($more) {
	global $post;
	return '<a class="read-more" href="'. get_permalink($post->ID) . '"> Pročitaj više <i class="fa fa-angle-right"></i></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Custom length excerpt, needs echo to output properly, the limit is the amount of words
function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '');
}

// Add a class to the post if it has a thumbnail
function thumbClass() {
	if(has_post_thumbnail()) {
		echo 'has-thumbnail';
	}
}

// Extract the src of the Featured Image
function extractImgSrc($thumbnailName) {
	if(has_post_thumbnail($post->ID)) {
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '$thumbnailName' );
		echo $image[0];
	}
}


// Output the site heading if its front page, else output page title
function siteHeading() {
	echo '<h1 id="hr-heading">Veleučilište u Šibeniku</h1>';
	echo '<h2 id="en-heading">Polytechnics of Sibenik</h2>';
}

function pageHeading() {
	the_title( '<h1 class="page-title">', '</h1>' );
}

// Function to display posts in a specific category
function postsInCategory($catName, $numOfPosts, $excerptLength, $articleClass) {
// Ispisuje najnovije obavijesti s kategorijom

	$catID = get_cat_ID($catName); //Return the Category ID from the Category Name
	$latestPosts = new WP_Query(
		array(
			'posts_per_page' => $numOfPosts,
			'category__in' => array($catID)
		)
	);

	if($latestPosts -> have_posts()) :
		while($latestPosts -> have_posts()) :
			$latestPosts -> the_post();
	?>

	<article class="<?php thumbClass(); echo ' ' . $articleClass; ?> post subsection">
		<?php
		if(has_post_thumbnail()) : ?>
			<a href="<?php echo get_permalink(); ?>" class="post-image" style="background-image: url(<?php extractImgSrc('home-post_thumbnail'); ?>);">

			</a>
		<?php endif; ?>
		<!-- Post Content -->
		<content class="post-content">
			<!-- Post Header -->
			<header class="post-header">
				<a class="post-title" href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a>
			</header>
			<!-- Post Excerpt -->
			<div class="post-excerpt">
				<p><?php echo excerpt($excerptLength); ?></p>
			</div>
			<!-- Post Footer -->
			<footer class="post-footer">
				<?php vus_posted_on(); ?>
			</footer>
		</content>
	</article>
<?php
		endwhile;
	endif;
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
