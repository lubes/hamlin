<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/navwalker.php' // Nav Walker
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// Enque Ajax Scripts

function starter_scripts() {
    wp_enqueue_script( 'includes', get_template_directory_uri() . '/js/min/includes.min.js', array('jquery'), '', true );
    wp_localize_script( 'includes', 'site', array(
        'theme_path' => get_template_directory_uri(),
        'ajaxurl'    => admin_url('admin-ajax.php')
        )
    );
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );

// Return the post content to the AJAX call

function my_load_ajax_content () {
    $args = array( 'post_type'=> array('directors'), 'p' => $_POST['post_id'] );
    $post_query = new WP_Query( $args );
    while( $post_query->have_posts() ) : $post_query->the_post(); ?>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5">
                <figure><img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid" /></figure>
                <h4 class="entry-title"><?php the_title(); ?><span><?php echo the_field('position');?></span></h4>
            </div>
            <div class="col-12 col-sm-12 col-md-7">
                <?php the_content();?>
            </div>
        </div>    
    <?php endwhile;exit;
}
add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );





