<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twenty_twenty_one_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('twentytwentyone', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		register_nav_menus(
			array(
				'primary' => esc_html__('Primary menu', 'twentytwentyone'),
				'footer' => esc_html__('Secondary menu', 'twentytwentyone'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height' => $logo_height,
				'width' => $logo_width,
				'flex-width' => true,
				'flex-height' => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');
		$background_color = get_theme_mod('background_color', 'D1E4DD');
		if (127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex($background_color)) {
			add_theme_support('dark-editor-style');
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ($is_IE) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style($editor_stylesheet_path);

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name' => esc_html__('Extra small', 'twentytwentyone'),
					'shortName' => esc_html_x('XS', 'Font size', 'twentytwentyone'),
					'size' => 16,
					'slug' => 'extra-small',
				),
				array(
					'name' => esc_html__('Small', 'twentytwentyone'),
					'shortName' => esc_html_x('S', 'Font size', 'twentytwentyone'),
					'size' => 18,
					'slug' => 'small',
				),
				array(
					'name' => esc_html__('Normal', 'twentytwentyone'),
					'shortName' => esc_html_x('M', 'Font size', 'twentytwentyone'),
					'size' => 20,
					'slug' => 'normal',
				),
				array(
					'name' => esc_html__('Large', 'twentytwentyone'),
					'shortName' => esc_html_x('L', 'Font size', 'twentytwentyone'),
					'size' => 24,
					'slug' => 'large',
				),
				array(
					'name' => esc_html__('Extra large', 'twentytwentyone'),
					'shortName' => esc_html_x('XL', 'Font size', 'twentytwentyone'),
					'size' => 40,
					'slug' => 'extra-large',
				),
				array(
					'name' => esc_html__('Huge', 'twentytwentyone'),
					'shortName' => esc_html_x('XXL', 'Font size', 'twentytwentyone'),
					'size' => 96,
					'slug' => 'huge',
				),
				array(
					'name' => esc_html__('Gigantic', 'twentytwentyone'),
					'shortName' => esc_html_x('XXXL', 'Font size', 'twentytwentyone'),
					'size' => 144,
					'slug' => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black = '#000000';
		$dark_gray = '#28303D';
		$gray = '#39414D';
		$green = '#D1E4DD';
		$blue = '#D1DFE4';
		$purple = '#D1D1E4';
		$red = '#E4D1D1';
		$orange = '#E4DAD1';
		$yellow = '#EEEADD';
		$white = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name' => esc_html__('Black', 'twentytwentyone'),
					'slug' => 'black',
					'color' => $black,
				),
				array(
					'name' => esc_html__('Dark gray', 'twentytwentyone'),
					'slug' => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name' => esc_html__('Gray', 'twentytwentyone'),
					'slug' => 'gray',
					'color' => $gray,
				),
				array(
					'name' => esc_html__('Green', 'twentytwentyone'),
					'slug' => 'green',
					'color' => $green,
				),
				array(
					'name' => esc_html__('Blue', 'twentytwentyone'),
					'slug' => 'blue',
					'color' => $blue,
				),
				array(
					'name' => esc_html__('Purple', 'twentytwentyone'),
					'slug' => 'purple',
					'color' => $purple,
				),
				array(
					'name' => esc_html__('Red', 'twentytwentyone'),
					'slug' => 'red',
					'color' => $red,
				),
				array(
					'name' => esc_html__('Orange', 'twentytwentyone'),
					'slug' => 'orange',
					'color' => $orange,
				),
				array(
					'name' => esc_html__('Yellow', 'twentytwentyone'),
					'slug' => 'yellow',
					'color' => $yellow,
				),
				array(
					'name' => esc_html__('White', 'twentytwentyone'),
					'slug' => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name' => esc_html__('Purple to yellow', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug' => 'purple-to-yellow',
				),
				array(
					'name' => esc_html__('Yellow to purple', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug' => 'yellow-to-purple',
				),
				array(
					'name' => esc_html__('Green to yellow', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug' => 'green-to-yellow',
				),
				array(
					'name' => esc_html__('Yellow to green', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug' => 'yellow-to-green',
				),
				array(
					'name' => esc_html__('Red to yellow', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug' => 'red-to-yellow',
				),
				array(
					'name' => esc_html__('Yellow to red', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug' => 'yellow-to-red',
				),
				array(
					'name' => esc_html__('Purple to red', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug' => 'purple-to-red',
				),
				array(
					'name' => esc_html__('Red to purple', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug' => 'red-to-purple',
				),
			)
		);

		/*
		 * Adds starter content to highlight the theme on fresh sites.
		 * This is done conditionally to avoid loading the starter content on every
		 * page load, as it is a one-off operation only needed once in the customizer.
		 */
		if (is_customize_preview()) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support('starter-content', twenty_twenty_one_get_starter_content());
		}

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');

		// Add support for experimental link color control.
		add_theme_support('experimental-link-color');

		// Add support for experimental cover block spacing.
		add_theme_support('custom-spacing');

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support('custom-units');

		// Remove feed icon link from legacy RSS widget.
		add_filter('rss_widget_feed_link', '__return_false');
	}
}
add_action('after_setup_theme', 'twenty_twenty_one_setup');

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init()
{

	register_sidebar(
		array(
			'name' => esc_html__('Footer', 'twentytwentyone'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'twenty_twenty_one_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('twenty_twenty_one_content_width', 750);
}
add_action('after_setup_theme', 'twenty_twenty_one_content_width', 0);

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts()
{
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ($is_IE) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get('Version'));
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
	}

	// RTL styles.
	wp_style_add_data('twenty-twenty-one-style', 'rtl', 'replace');

	// Print styles.
	wp_enqueue_style('twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');

	// Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get('Version'),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if (has_nav_menu('primary')) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array('twenty-twenty-one-ie11-polyfills'),
			wp_get_theme()->get('Version'),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array('twenty-twenty-one-ie11-polyfills'),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'twenty_twenty_one_scripts');

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script()
{

	wp_enqueue_script('twentytwentyone-editor', get_theme_file_uri('/assets/js/editor.js'), array('wp-blocks', 'wp-dom'), wp_get_theme()->get('Version'), true);
}

add_action('enqueue_block_editor_assets', 'twentytwentyone_block_editor_script');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix()
{

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
			/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function () { var t, e = location.hash.substring(1); /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus()) }), !1);
		</script>
		<?php
	}
}
add_action('wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix');

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages()
{
	$custom_css = twenty_twenty_one_get_non_latin_css('front-end');

	if ($custom_css) {
		wp_add_inline_style('twenty-twenty-one-style', $custom_css);
	}
}
add_action('wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages');

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init()
{
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri('/assets/js/customize-helpers.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri('/assets/js/customize-preview.js'),
		array('customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers'),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('customize_preview_init', 'twentytwentyone_customize_preview_init');

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts()
{

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri('/assets/js/customize-helpers.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts');

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes()
{
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters('twentytwentyone_html_classes', '');
	if (!$classes) {
		return;
	}
	echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class()
{
	?>
	<script>
		if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
			document.body.classList.add('is-IE');
		}
	</script>
	<?php
}
add_action('wp_footer', 'twentytwentyone_add_ie_class');

if (!function_exists('wp_get_list_item_separator')):
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator()
	{
		/* translators: Used between list items, there is a space after the comma. */
		return __(', ', 'twentytwentyone');
	}
endif;

function my_custom_post_case_studies()
{
	$labels = array(
		'name' => _x('Case Studies', 'post type general name'),
		'singular_name' => _x('Case Study', 'post type singular name'),
		'add_new' => _x('Add New', 'Case Study'),
		'add_new_item' => __('Add New Case Study'),
		'edit_item' => __('Edit Case Study'),
		'new_item' => __('New Case Study'),
		'all_items' => __('All Case Studies'),
		'view_item' => __('View Case Study'),
		'search_items' => __('Search Case Studies'),
		'not_found' => __('No Case Studies found'),
		'not_found_in_trash' => __('No Case Studies found in the Trash'),
		//'parent_item_colon'  => ’,
		'menu_name' => 'Case Studies'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Case Studies and Case Study specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'custom-fields'),
		'has_archive' => false,
		'show_ui' => true,
		'show_in_nav_menus' => true

	);
	register_post_type('casestudies', $args);
}
add_action('init', 'my_custom_post_case_studies');
function my_case_study_shortcode_function()
{
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$all_args = array(
		'post_type' => 'casestudies',
		'post_status' => 'publish',
		'paged' => $paged,
		'order' => 'DESC',
		'posts_per_page' => -1,
	);
	$the_query = new WP_Query($all_args);

	// The Loop
	if ($the_query->have_posts()):

		while ($the_query->have_posts()):

			$the_query->the_post();
			$featured_img = get_the_post_thumbnail_url($the_query->ID);
			$image_id = get_post_thumbnail_id($the_query->ID);

			$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
			$image_title = get_the_title($image_id);
			?>
			<li>
				<div class="box">
					<a href="<?php the_permalink(); ?>" style="text-decoration:none; color:inherit; display:block;">
						<div class="slider-content">
							<div class="slider-img"><img src="<?php echo $featured_img; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>"></div>
							<div class="slider-text">
								<h5>
									<?php the_title(); ?>
								</h5>
								<!-- <p>teams helping established corporations enhance their</p> -->
							</div>
						</div>
					</a>
				</div>
			</li>
		<?php endwhile;
		wp_reset_postdata();
	endif; ?>
<?php }
add_shortcode('my_case_study_shortcode', 'my_case_study_shortcode_function');





function my_blog_shortcode_function()
{
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    add_image_size('custom-thumb', 455.39, 455.39, true);
    $all_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $paged,
        'order' => 'ASC',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query($all_args);

    // The Loop
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) :
            $the_query->the_post();
            $thumbnail_id = get_post_thumbnail_id($the_query->ID);
            	$image_alt = get_the_title($image_id);
		$image_title = get_the_title($image_id);
            // Check for a specific rendered size of the image
            $featured_img = wp_get_attachment_image_src($thumbnail_id, 'custom-thumb');
            
            // Check if $featured_img is an array before accessing its offsets
            if (is_array($featured_img)) {
                $featured_img_width = $featured_img[1];
                $featured_img_height = $featured_img[2];

                if ($thumbnail_id != null && $featured_img_width == 455 && $featured_img_height == 455) {
                    $title = get_the_title($the_query->ID);
                    $content = get_the_content($the_query->ID);
                    ?>
                    <li>
                        <div class="box">
                            <div class="slider-content">
                                <div class="slider-img">
                                     <img src="<?php echo esc_url($featured_img[0]); ?>" alt="<?php echo esc_attr($image_alt); ?>" title="<?php echo esc_attr($image_title); ?>">
                                <div class="slider-text">
                                    <div class="text">
                                        <h5>
                                            <?php echo wp_trim_words($title, 5, '...'); ?>
                                        </h5>
                                        <p>
                                            <?php echo wp_trim_words($content, 10, '...'); ?>
                                        </p>
                                    </div>
                                    <div class="readmore"><a href="<?php echo get_the_permalink($the_query->ID); ?>">Read More..</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            }

        endwhile;
        wp_reset_postdata();
    endif;
}
add_shortcode('my_blog_shortcode', 'my_blog_shortcode_function');






// function custom_case_studies_template( $template ) {
// 	if ( is_singular( 'casestudies' ) ) {
// 	$template = locate_template( 'single-case_studies.php' );
// 	}
// 	return $template;
// }
// add_filter( 'template_include', 'custom_case_studies_template' );


//case study post pagination
function more_post_ajax()
{

	$page_no = $_POST['page_no'];
	$post_per_page_limit = 4;
	$offset = ($page_no - 1) * $post_per_page_limit;
	$args = array(
		'post_type' => 'casestudies',
		'order' => 'DESC',
		'posts_per_page' => $post_per_page_limit,
		'post_status' => 'publish',
		'offset' => $offset
	);
	$loop = new WP_Query($args);

	while ($loop->have_posts()) {
		$loop->the_post();
		$featured_img = get_the_post_thumbnail_url($loop->ID);
		$image_id = get_post_thumbnail_id($loop->ID);
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
		$image_title = get_the_title($image_id);
		?>
		<div class="col-md-6 col-sm-12 image">
			<div class="img-wrapper project-img">
				<a href="<?php the_permalink($loop->ID); ?>"><img src="<?php echo $featured_img; ?>" class="img-responsive"
						alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>"></a>
			</div>
		</div>

	<?php
	}
	exit;
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

function ajax_pagination_links()
{
	$current_page = $_POST['page_no'];
	$nav_args = array('post_type' => 'casestudies', 'posts_per_page' => -1);
	$nav_query = new WP_Query($nav_args);
	$total_post = $nav_query->post_count;
	$limit_per_page = 4;
	$previous = $current_page - 1;
	$next = $current_page + 1;
	$total_pages = ceil($total_post / $limit_per_page);
	if ($current_page != 1) {
		echo '<a href="javascript:;" class="pagescustom previous" data-pageid="' . $previous . '"  id="page' . $previous . '"><i class="icofont-rounded-left"></i></a>';
	}
	for ($x = 1; $x <= $total_pages; $x++) {
		echo '<a href="javascript:;" class="pagescustom" data-pageid="' . $x . '"  id="page' . $x . '">' . $x . '</a>';
	}
	if ($current_page != $total_pages) {
		echo '<a href="javascript:;" class="pagescustom next" data-pageid="' . $next . '"  id="page' . $next . '"><i class="icofont-rounded-right"></i></a>';
	}
	exit;
}
add_action('wp_ajax_nopriv_ajax_pagination_links', 'ajax_pagination_links');
add_action('wp_ajax_ajax_pagination_links', 'ajax_pagination_links');
add_filter( 'auto_update_plugin', '__return_false' );

add_filter( 'wpseo_robots', function( $robots ) {
    if ( is_tag() || is_category() ) {
        return 'noindex,nofollow';
    }
    return $robots;
});