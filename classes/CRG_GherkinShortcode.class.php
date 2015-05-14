<?php

class CRG_GherkinShortcode{

	public $shortcode_output;

	function __construct(){
		$this->receiveFormInputIfItIsThere();
		$this->calculateShortcodeOutput();
	}

	public function receiveFormInputIfItIsThere(){
		if (isset($_POST['CRG_Gherkin_form_submit_button'])){
			$featureName = $_POST['CRG_Gherkin_feature_name'];
			$inOderTo = $_POST['CRG_Gherkin_in_order_to'];
			$asA = $_POST['CRG_Gherkin_as_a'];
			$iNeed = $_POST['CRG_Gherkin_I_need'];//die ("line 16");	
		}
	}
	
	public function getShortcodeOutput(){
		$this->calculateShortcodeOutput();
		return $this->shortcode_output;
	}

	private function calculateShortcodeOutput(){
		$this->shortcode_output = 

<<<OUTPUT_START_STOP_HERE_DOC
<form name = "CRG_Gherkin_Form" method = "post">
	<h2>
		Feature Name:
	</h2>
	<label for = "CRG_Gherkin_feature_name" id = "CRG_Gherkin_label_for_feature_name_text_input">
		Feature:
	</label>
	<input type = "text" name = "CRG_Gherkin_feature_name" id = "CRG_Gherkin_feature_name" />


	<div id = "CRG_Gherkin_features_description_area">
		<div id = "CRG_Gherkin_in_order_to_div">
			<span id = "CRG_Gherkin_in_order_to_span">
				IN ORDER TO
			</span>
			<input name = "CRG_Gherkin_in_order_to" id = "CRG_Gherkin_in_order_to" type = "text">
		</div><!--<^ END #CRG_Gherkin_in_order_to_div -->
		<div id = "CRG_Gherkin_as_a_div">
			<span id = "CRG_Gherkin_as_a_span">
				AS A
			</span>
			<input name = "CRG_Gherkin_as_a" id = "CRG_Gherkin_as_a" type = "text">
		</div><!--<^ END #CRG_Gherkin_as_a_div -->
		<div id = "CRG_Gherkin_I_need_div">
			<span id = "CRG_Gherkin_I_need_span">
				I NEED
			</span>
			<input name = "CRG_Gherkin_I_need" id = "CRG_Gherkin_I_need" type = "text">
		</div><!--<^ END #CRG_Gherkin_I_need_div -->



	</div><!-- END #CRG_Gherkin_features_description_area -->

	<div id = "CRG_Gherkin_scenarios_area"></div>

	<input type = "submit" name = "CRG_Gherkin_form_submit_button" id = "CRG_Gherkin_form_submit_button" value = "SUBMIT FEATURE" />

</form>
OUTPUT_START_STOP_HERE_DOC;

	}//<^-- END: private function calculate_shortcode_output(){
}//<^-- END: class CRG_GherkinShortcode{

?>
