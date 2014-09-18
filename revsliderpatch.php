<?php
/*
Plugin Name: Patch for Revolution Slider
Author: Dragos Gaftoneanu
Description: This plugin repairs the vulnerability in Revolution Slider without the need to update your plugin and/or theme.
Version: 1.0
Author URI: http://dragosgaftoneanu.com/
*/

if(stristr($_SERVER["SCRIPT_FILENAME"],"/wp-admin/admin-ajax.php"))
{
	$file = preg_replace('/[^\da-zA-Z0-9 -_.]/i', '', $_GET['img']);
	$q = @explode(".",$file);
	$acceptate = array("jpg","JPG","jpeg","gif","png","PNG","GIF","");
	if (!in_array($q[count($q)-1],$acceptate))
	{
		die("Access denied.");
	}
}


