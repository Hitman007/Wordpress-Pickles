<?php

class CRG_GherkinPlugin{

	public $pageOutput;

	function __construct(){}

	public function echoAdminPageOutput(){
		$this->calculateShortcodeOutput();
		echo ($this->pageOutput);
	}

	private function calculateShortcodeOutput(){
		$this->pageOutput = 

<<<OUTPUT_START_STOP_HERE_DOC
Howdy day
OUTPUT_START_STOP_HERE_DOC;

	}//<^-- END private function calculateShortcodeOutput(){

	//This is an autoloader for the classes nessicary for this plugin:
	public function autoloader($class) {
		include $class . '.class.php';
	}

	public function addFeatureRequestLinksInPluginsAdminSection(){
		$this->autoloader("CRG_AdditionalPluginAdminLinks");
		$CRG_AdditionalPluginAdminLinks = new CRG_AdditionalPluginAdminLinks;
	}

	public function registerCustomPostTypes(){
		$this->autoloader("CRG_GherkinCustomPostTypes");
		$CRG_GherkinCustomPostTypes = new CRG_GherkinCustomPostTypes;
	}

	public function registerAcitvationHook($file){
		//die("39");//GherkinDefaultEnglishPickles
		register_activation_hook($file,array($this,'doActivationHook'));
	}

	public function doActivationHook(){}

	public function receivePickleIfSubmitted(){
		//If a pickle is being submitted, then launch the Pickle Receiver:
		if (isset($_POST['CRG_Gherkin_form_submit_button'])){
			autoloader("CRG_GherkinReceiver");
			$CRG_GherkinReceiver = new CRG_GherkinReceiver;
		}
	}

	public function registerAndEnqueueScripts(){
		//CSS:
		wp_register_style( 'CRG Gherkin Plugin CSS', plugins_url( '/crg_gherkin/css/crg_gherkin_plugin.css' ) );
		wp_enqueue_style( 'CRG Gherkin Plugin CSS' );

		//jQuery:
		wp_register_script('CRG Gherkin Plugin JS', plugins_url( '/crg_gherkin/js/crg_gherkin.js' ), "jquery-core" );
		wp_enqueue_script( 'CRG Gherkin Plugin JS' );
	}

	public function registerFeaturesAdminPage(){
		add_action( 'admin_menu', array($this, 'addAdminMenuPageToWordpress') );
	}

	public function addAdminMenuPageToWordpress(){
		add_menu_page( 'Features', 'Features', 'activate_plugins', 'features', array($this,'instantiateAndEchoAdminPage'), plugins_url( "/crg_gherkin/assets/images/pickle.gif" ) ); 
	}

	public function instantiateAndEchoAdminPage(){
		$this->autoloader('CRG_GherkinAdminPage');
		$CRG_GherkinAdminPage = new CRG_GherkinAdminPage;
		echo ($CRG_GherkinAdminPage->getAdminPageContents() );
	}	

}
?>
