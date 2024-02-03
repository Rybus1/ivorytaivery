// <?php
// function my_toolbars( $toolbars )
// {
//     $toolbars['Basic+CustomButtons' ] = array();
// 	$toolbars['Basic+CustomButtons' ][1] = array('yellow');
//     return $toolbars;
// }
// add_action( 'init', 'wptuts_buttons' );
// function wptuts_buttons() {
//     add_filter( "mce_external_plugins", "wptuts_add_buttons" );
//     add_filter( 'mce_buttons', 'wptuts_register_buttons' );
// }
// function wptuts_add_buttons( $plugin_array ) {
//     $plugin_array['wptuts'] = get_template_directory_uri() . '/functions-parts/custom-buttons-tinymce.js';
//     return $plugin_array;
// }
// function wptuts_register_buttons( $buttons ) {
//     array_unshift( $buttons, 'yellow');
//     return $buttons;
// }
// add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
// ?>