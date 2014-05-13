<?php

function adminer_object()
{
	// required to run any plugin
	include_once "./plugins/plugin.php";

	// autoloader
	foreach (glob("plugins/*.php") as $filename) {
		include_once "./$filename";
	}

	$plugins = array(
		// specify enabled plugins here
		new AdminerDatabaseHide(array("mysql", "information_schema", "performance_schema")),
		new AdminerLoginServers(array(filter_input(INPUT_SERVER, 'SERVER_NAME'))),
		new AdminerMobile(),
		new AdminerJsonPreview(),
	);

	return new AdminerPlugin($plugins);
}
// include original Adminer or Adminer Editor
include "./adminer.php";
