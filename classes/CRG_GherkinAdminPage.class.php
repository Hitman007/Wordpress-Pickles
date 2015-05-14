<?php

interface CRG_AdminPage{
	//This function should return fully formtted HTML
	function getAdminPageContents();
	function calculatePageOutput();
}

class CRG_GherkinAdminPage implements CRG_AdminPage{

	public $adminPageOutput;

	function __construct(){}

	public function getAdminPageContents(){
		$this->calculatePageOutput();
		return ($this->adminPageOutput);
	}

	public function calculatePageOutput(){
		$this->adminPageOutput = "";
		//Clickable list of features:
		include_once('CRG_ClickableListOfFeatures.class.php');
		$CRG_ClickableListOfFeatures = new CRG_ClickableListOfFeatures;

		$someTerseYetDescriptive = __("Some terse yet descriptive text of what is desired");
		$inOrderTo = __("IN ORDER TO");
		$textASA = __("AS A");
		$this->adminPageOutput =
<<<OUTPUT_START_STOP_HERE_DOC
<div id = "crg_gherkin_container_div">
<h2>
	Features:
</h2>
<div id = "crg_add_feature_button_div">
	<input type = "button" name = "crg_add_feature_button" id = "crg_add_feature_button" value = "Add Feature" />
</div>


<div id = "add_feature_form_div">

	<div id = "feature_name_div">
		<input type = "input" name = "feature_name" id = "feature_name" />
		<div id = "feature_name_description">
		$someTerseYetDescriptiveText
	</div><!-- END id = "feature_name_div" -->

	<div id = "biz_value_div">
		$inOrderTo
	</div><!-- END id = "biz_value_div" -->
	<div id = "system_actor_div">
		$textASA
	</div><!-- END id = "system_actor_div" -->
	<div id = "outcome_div">
	</div><!-- END id = "outcome_div" -->

</div><!-- END id = "add_feature_form" -->
<br />
</div><!-- <^--END <div id = "crg_gherkin_container_div"> -->
OUTPUT_START_STOP_HERE_DOC;
		$this->adminPageOutput = $this->adminPageOutput . $CRG_ClickableListOfFeatures->getClickableListOfFeatures();
		$this->adminPageOutput = $this->adminPageOutput . 
<<<OUTPUT_START_STOP_HERE_DOC

OUTPUT_START_STOP_HERE_DOC;

	}//<^-- END: private function calculatePageOutput(){

}//<^-- END: class CRG_GherkinPage{

?>
