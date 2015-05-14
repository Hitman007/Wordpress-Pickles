<?php
//This class adds the link "features" to the plugins.php page
class CRG_AdditionalPluginAdminLinks{

	function __construct(){

		//We need the function get_plugins:
		if(!function_exists('get_plugins')) {
			include_once(ABSPATH . "wp-admin/includes/plugin.php");
		}

		//add_action('init','plugin_roller');
		add_action('init', array($this,'addPluginActionLinksFilter'));

	}//<^-- END function __construct(){

	function addPluginActionLinksFilter(){
		$plugin = get_plugins();
		$listOfPlugins = array_keys($plugin);
		foreach ($listOfPlugins as $pluginName){
			add_filter("plugin_action_links_$pluginName", array($this,'pluginActionLinksFilter') );
		}
	}//<^-- END addPluginActionLinksFilter(){

	function pluginActionLinksFilter($links) { 
		$additionalLink = '<a href="/wp-admin/admin.php?page=features">Features</a>';//Change this line to whatever
  		array_push($links, $additionalLink); 
  		return $links; 
	}//<^-- END pluginActionLinksFilter($links) { 

}








?>
