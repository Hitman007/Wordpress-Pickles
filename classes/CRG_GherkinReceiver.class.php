<?php

class CRG_GherkinReceive{

	function __construct(){
		if (isset($_POST['CRG_Gherkin_form_submit_button'])){
			add_action('init', array($this,'CRG_addCPT'));
		}
	}//<^-- END function __construct(){

	function CRG_addCPT(){
		global $user_ID;
		$inOrderTo = $_POST['CRG_Gherkin_in_order_to'];
		$featureName = $_POST['CRG_Gherkin_feature_name'];
		$new_post = array(
			'post_title' => $featureName,
			'post_content' => 'Asia makes the best cat food around!',
			'post_status' => 'publish',
			'post_author' => $user_ID,
			'post_type' => 'gherk'
		);
		$post_id = wp_insert_post($new_post);
	}//<^-- END function CRG_addCPT(){
}
?>
