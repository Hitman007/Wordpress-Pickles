<?php

class CRG_ClickableListOfFeatures{

	public $output;

	function __construct(){}

	public function getClickableListOfFeatures(){//die("line 9 CRG_ClickableListOfFeatures");
		global $wpdb;		
		$args=array(
  			'pickle-type' => 'feature',
 			'post_type' => 'pickle',
  			'post_status' => 'publish'
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$x = $x . "<a href = '" . get_the_permalink() . "' >" . get_the_title() . "</a><br />";
			}
		}
		wp_reset_postdata();	
		return $x;
	}
}

?>
