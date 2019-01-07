<?php
date_default_timezone_set('Europe/Copenhagen');
ini_set('date.timezone', 'Europe/Copenhagen');
setlocale(LC_ALL, 'da_DK', 'da', 'danish', 'DK');
ini_set('display_errors', 'on');
function responsive_scripts_basic()
{


	wp_register_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui/jquery-ui.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'jquery-ui' );

	wp_register_script('html2pdf', get_template_directory_uri() . '/js/html2pdf/html2pdf.js', array( 'jquery' ), true );
  wp_enqueue_script( 'html2pdf' );

    //Bootstrap
    wp_register_script('bootstrap', get_template_directory_uri() . '/mdb/js/bootstrap.min.js', array( 'tether' ), true );
    wp_register_script('mdb', get_template_directory_uri() . '/mdb/js/mdb.js', array( 'bootstrap', 'jquery' ), true );
    wp_register_script('bootstrapdatepicker', get_template_directory_uri() . '/scripts/datepicker/js/bootstrap-datepicker.min.js', array( 'bootstrap' ), true );
    wp_register_script('bootstrapdatepicker-da', get_template_directory_uri() . '/scripts/datepicker/locales/da.js', array( 'bootstrapdatepicker' ), true );
    wp_register_script('bootstrap-clockpicker', get_template_directory_uri() . '/scripts/clockpicker/bootstrap-clockpicker.min.js', array( 'bootstrap' ), true );

    wp_enqueue_script( 'mdb' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrapdatepicker' );
    wp_enqueue_script( 'bootstrapdatepicker-da' );
    wp_enqueue_script( 'bootstrap-clockpicker' );

	//scripts hjælper
    wp_register_script('tether', get_template_directory_uri() . '/mdb/js/tether.min.js', array( 'jquery' ), true );
    wp_register_script('autogrow', get_template_directory_uri() . '/js/autogrow.js', array( 'jquery' ), true );
    wp_register_script('conditionize', get_template_directory_uri() . '/js/conditionize.jquery.js', array( 'jquery' ), true );
//    wp_register_script('nicedit', 'http://js.nicedit.com/nicEdit-latest.js', true );
		wp_register_script('touchpunch', get_template_directory_uri() . '/js/touchpunch.js', array( 'jquery-ui' ), true );
		wp_register_script('pusher', 'https://js.pusher.com/4.1/pusher.min.js', true );
		wp_register_script('adresser', get_template_directory_uri() . '/js/aws/dawa-autocomplete2.js', array( 'jquery' ), true );
		wp_register_script('dawa', 'https://dawa.aws.dk/js/autocomplete/dawa-autocomplete2.min.js', array( 'jquery' ), true );
//		wp_register_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC373AHGXJ2TUE5W8wVHJkbSBkRyueKaJ0', array( 'jquery' ), true );
		wp_register_script('places', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC373AHGXJ2TUE5W8wVHJkbSBkRyueKaJ0&libraries=places&language=da&region=DK', array( 'jquery' ), true );
		//wp_register_script('tinymcecloud', 'https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=cwf20iyo7s12ii60adgi7yavyvvck5ckvlu2u1p9my4iibiv', array( 'jquery' ), true );

		wp_register_script('charts', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js', array( 'jquery' ), true );
// 		wp_register_script('easypiechart', get_template_directory_uri() . '/scripts/easypiechart/easypiechart.js', array( 'jquery' ), true );;
	
	wp_register_script('mdb-fss', get_template_directory_uri() . '/MDB-Plugins/MDB-FSScroller/js/addons/mdbFsscroller.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'mdb-fss' );	
	
    wp_enqueue_script( 'tether' );
    wp_enqueue_script( 'autogrow' );
    wp_enqueue_script( 'conditionize' );
//		wp_enqueue_script( 'nicedit' );
    wp_enqueue_script( 'touchpunch' );
		wp_enqueue_script( 'pusher' );
		//wp_enqueue_script( 'adresser' );
		wp_enqueue_script( 'dawa' );
		wp_enqueue_script( 'maps' );
		wp_enqueue_script( 'places' );
		wp_enqueue_script( 'tinymcecloud' );
		wp_enqueue_script( 'charts' );
// 	wp_enqueue_script( 'easypiechart' );

	//Theme
    wp_register_script('theme', get_template_directory_uri() . '/js/theme.js', true );
    wp_enqueue_script( 'theme' );
    
    wp_enqueue_script("jquery-ui-draggable");
}

add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic', 5 );

function add_jquery_ui() {
 wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js', array('jquery'));

}
add_action( 'wp_enqueue_scripts', 'add_jquery_ui' );

function add_tinymce() {
	//wp_enqueue_script( 'tinymce_js', includes_url( 'js/tinymce/' ) . 'wp-tinymce.php', array( 'jquery' ), false, true );
/*
	//wp_register_script('add_tinymce_sdk', get_template_directory_uri() . '/tinymce/tinymce.min.js');
	wp_register_script('add_tinymce_sdk', 'https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=cwf20iyo7s12ii60adgi7yavyvvck5ckvlu2u1p9my4iibiv');
	wp_register_script('add_tinymce_powerpaste', 'https://cloud.tinymce.com/stable/plugins.min.js?apiKey=cwf20iyo7s12ii60adgi7yavyvvck5ckvlu2u1p9my4iibiv', array( 'add_tinymce_sdk' ), true );
	wp_register_script('vb_agenda_add_checkbox_tinymce', get_template_directory_uri() . '/tinymce/plugins/vb_agenda_add_checkbox_tinymce/plugin.min.js', array( 'add_tinymce_sdk' ), true );

	wp_enqueue_script( 'add_tinymce_sdk' );
	wp_enqueue_script( 'vb_agenda_add_checkbox_tinymce' );
	wp_enqueue_script( 'add_tinymce_powerpaste' );
*/
}
add_action( 'wp_enqueue_scripts', 'add_tinymce' );

add_action('wp_head','tasks_ajaxurl');
function tasks_ajaxurl() {
?>
<script type="text/javascript">
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<script type="text/javascript">
var vbNavn = '<?php echo str_replace(' ', '', get_bloginfo( 'name' )); ?>';
</script>
<script type="text/javascript">
	var vidensbankenAgendaPusher = new Pusher('d30edf0ae58cead9d042', {
		cluster: 'eu'
	});
</script>
<?php
}

function responsive_styles()
{
	wp_register_style( 'fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css', array(), 'all' );
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/mdb/css/bootstrap.min.css', array(), 'all');
	wp_register_style( 'mdb', get_template_directory_uri() . '/mdb/css/mdb.css', array(), 'all');
	wp_register_style( 'theme', get_template_directory_uri() . '/style.css', array(), 'all');
	wp_register_style( 'bootstrapdatepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css', array(), 'all');
	wp_register_style( 'bootstrap-clockpicker', get_template_directory_uri() . '/scripts/clockpicker/bootstrap-clockpicker.min.css',  array(), 'all');

	wp_register_style( 'mdb-fss', get_template_directory_uri() . '/MDB-Plugins/MDB-FSScroller/css/addons/fsscroller.min.css"',  array(), 'all');


	wp_enqueue_style( 'fa' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'mdb' );
	wp_enqueue_style( 'theme' );
	wp_enqueue_style( 'bootstrapdatepicker' );
	wp_enqueue_style( 'bootstrap-clockpicker' );
	wp_enqueue_style( 'mdb-fss');
}
add_action( 'wp_enqueue_scripts', 'responsive_styles' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'venstre',
		'id'            => 'venstre',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// add tag support to pages
add_action('init', 'tags_support_all');
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'dokumenter');
	register_taxonomy_for_object_type('afdeling', 'dokumenter');
	add_post_type_support( 'dokumenter', 'front-end-editor' );
	add_post_type_support( 'page', 'front-end-editor' );
}


function tinymce_plugins( $plugins ) {
/*
     $plugins['save'] = get_template_directory_uri() . '/tinymce/plugins/save/plugin.min.js';
     $plugins['autoresize'] = get_template_directory_uri() . '/tinymce/plugins/autoresize/plugin.min.js';
     $plugins['imagetools'] = get_template_directory_uri() . '/tinymce/plugins/imagetools/plugin.min.js';
     return $plugins;
*/
}
add_filter( 'mce_external_plugins', 'tinymce_plugins' );


function my_format_TinyMCE( $in ) {
    //styles for the editor to provide better visual representation.
    $in['block_formats'] = "Paragraph=p;Kapitel=h4;Underkapitel=h5";
/*
    $in['toolbar1'] = 'formatselect,bold,italic,underline,bullist,numlist,link,unlink,alignleft,aligncenter,alignright,undo,redo,paste,fullscreen,save,removeformat';
    $in['toolbar2'] = '';
    $in['toolbar3'] = '';
    $in['toolbar4'] = '';
*/
    return $in;
}
add_filter( 'tiny_mce_before_init', 'my_format_TinyMCE' );

 add_action('the_content','ravs_content_div');
 function ravs_content_div( $content ){
  return '<div class="entry-content">'.$content.'</div>';
 }

 function lasso_dokumenter($arr)
{
	return array( 'dokumenter');
}

add_filter( 'lasso_allowed_post_types', 'lasso_dokumenter' );

register_sidebar( array(
  'name'          => 'widget_area_venstre',
  'id'            => 'widget_area_venstre',
) );
register_sidebar( array(
  'name'          => 'widget_area_hoejre',
  'id'            => 'widget_area_hoejre',
) );

remove_filter('wp_head','adjacent_posts_rel_link_wp_head',10);

		require 'mandrill/Mandrill.php';


include 'ajax.php';
require('scripts/pusher/pusher.php');

if(!isset($vb_agenda_pusher)) {
	$options = array(
		'cluster' => 'eu',
		'encrypted' => true
	);
	$vb_agenda_pusher = new Pusher\Pusher(
		'd30edf0ae58cead9d042',
		'c2cae968c99cddc145f8',
		'390035',
		$options
	);
}

function xcompile_post_type_labels($singular = 'Post', $plural = 'Posts') {
    $p_lower = strtolower($plural);
    $s_lower = strtolower($singular);

    return [
        'name' => $plural,
        'singular_name' => $singular,
        'add_new_item' => "New $singular",
        'edit_item' => "Edit $singular",
        'view_item' => "View $singular",
        'view_items' => "View $plural",
        'search_items' => "Search $plural",
        'not_found' => "No $p_lower found",
        'not_found_in_trash' => "No $p_lower found in trash",
        'parent_item_colon' => "Parent $singular",
        'all_items' => "All $plural",
        'archives' => "$singular Archives",
        'attributes' => "$singular Attributes",
        'insert_into_item' => "Insert into $s_lower",
        'uploaded_to_this_item' => "Uploaded to this $s_lower",
    ];
}

?>
