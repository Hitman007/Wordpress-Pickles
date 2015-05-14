<?php


class CRG_GherkinCustomPostTypes {
	
	public $pluginDirectory; 
	public function __construct() {
	//die(__FILE__);
		$this->pluginDirectory = plugin_dir_url(dirname( __FILE__ ));
		add_action( 'init', array( $this, 'create_taxonomies' ) );
		add_action('init', array( $this, 'createPickleCustomPostType' ) );
	} 
	public function activate() {
		die("14");
		$this->create_taxonomies();
		include_once("CRG_GherkinDefaultEnglishPickles.class.php");
		$GherkinDefaultEnglishPickles = new CRG_GherkinDefaultEnglishPickles;

	}
	function create_taxonomies() {
		$pickle_type_args = array( 
			'hierarchical' => true,  
			'labels' => array(
				'name'=> _x('Pickle Types', 'taxonomy general name' ),
				'singular_name' => _x('Pickle Type', 'taxonomy singular name'),
				'search_items' => __('Search Pickle Types'),
				'popular_items' => __('Popular Pickle Types'),
				'all_items' => __('All Pickle Types'),
				'edit_item' => __('Edit Pickle Type'),
				'edit_item' => __('Edit Pickle Type'),
				'update_item' => __('Update Pickle Type'),
				'add_new_item' => __('Add New Pickle Type'),
				'new_item_name' => __('New Pickle Type Name'),
				'separate_items_with_commas' => __('Seperate Pickle Types with Commas'),
				'add_or_remove_items' => __('Add or Remove Pickle Types'),
				'choose_from_most_used' => __('Choose from Most Used Pickle Types')
			),
			'query_var' => true,  
            		'rewrite' => array('slug' =>'pickle-type')        
           	);
		register_taxonomy('pickle-type', 'pickle',$pickle_type_args);
	}
	function createPickleCustomPostType(){
		$menu_icon = $this->pluginDirectory . "/assets/images/pickle.gif";
		$labels = array(
			'name'                => _x( 'Pickles', 'Post Type General Name', 'crg_text_domain' ),
			'singular_name'       => _x( 'Pickle', 'Post Type Singular Name', 'crg_text_domain' ),
			'menu_name'           => __( 'Pickles', 'crg_text_domain' ),
			'parent_item_colon'   => __( 'Parent Pickle:', 'crg_text_domain' ),
			'all_items'           => __( 'All Pickles', 'crg_text_domain' ),
			'view_item'           => __( 'View Pickle', 'crg_text_domain' ),
			'add_new_item'        => __( 'Add New Pickle', 'crg_text_domain' ),
			'add_new'             => __( 'Add New', 'crg_text_domain' ),
			'edit_item'           => __( 'Edit Pickle', 'crg_text_domain' ),
			'update_item'         => __( 'Update Pickle', 'crg_text_domain' ),
			'search_items'        => __( 'Search Pickle', 'crg_text_domain' ),
			'not_found'           => __( 'Not found', 'crg_text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'crg_text_domain' ),
		);
		$args = array(
			'label'               => __( 'Pickle', 'crg_text_domain' ),
			'description'         => __( 'Pickles', 'crg_text_domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
			'taxonomies'          => array( 'pickle-type' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => $menu_icon,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type('Pickle', $args);

		wp_insert_term( __('Features'),'pickle-type', array( 'description' => __('Features are what the system does, or should do.'),'slug' => 'feature'));
		wp_insert_term( __('Scenarios'),'pickle-type', array( 'description' => __('Features are composed of scenarios.'),'slug' => 'scenario'));
		wp_insert_term( __('Backgrounds'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Scenario Outlines'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Terms'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Actors'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Values'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Hurdles'),'pickle-type', array( 'description' => __(''),'slug' => ''));
		wp_insert_term( __('Spears'),'pickle-type', array( 'description' => __(''),'slug' => ''));
	}
}
?>
