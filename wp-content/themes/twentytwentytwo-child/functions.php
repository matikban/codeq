<?php
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style('child_theme_style', get_stylesheet_directory_uri() . "/dist/app.css" );
}


// ACF JSON
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf';
    return $paths;
}

// Ajax Call - Load Employees

function show_employees_scripts() {
	global $wp_query;

	wp_enqueue_script('jquery');
	wp_register_script( 'loadEmployees', get_stylesheet_directory_uri() . '/src/js/loadEmployees.js', array('jquery') );
	wp_localize_script( 'loadEmployees', 'show_employees_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
	) );
 	wp_enqueue_script( 'loadEmployees' );
}

add_action( 'wp_enqueue_scripts', 'show_employees_scripts' );

function show_employees_ajax_handler(){
        $employees = get_field("employeer", 6);
        if(!empty($employees)) {
            foreach($employees as $employeer) { ?>
            <div class="employees__single">
                <img src="<?php echo $employeer['image']['url']; ?>" alt="<?php echo $employeer['image']['title']; ?>" />
                <h3><?php echo $employeer['name']; ?></h3>
            </div>
            <?php }
        } else { echo "Nothing to show"; }
    die;
}

add_action('wp_ajax_loadmore', 'show_employees_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'show_employees_ajax_handler');
