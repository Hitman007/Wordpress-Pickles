<?php

class CRG_LinkListOfPluginsAndThemes{

	public $output;

	function __construct(){}

	public function getLinkList(){
		$plugins = get_plugins();
		foreach ($plugins as $plugin){
			$this->output = $this->output . $plugin['Name'] . "<br />";
		}
		return $this->output;
	}
}

?>
