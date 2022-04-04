add_action( 'init', 'cptt_custom_post_types' );
function cptt_custom_post_types() {
  register_post_type( 'property',
    array(
      'labels' => array(
        'name' => __( 'Properties' ),
        'singular_name' => __( 'Property' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'menu_icon' => 'dashicons-laptop'
    )
  );
}