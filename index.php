<?php

function adminer_object()
{
	// Required to run any plugin.
	include_once "./plugins/plugin.php";

	// Plugins auto-loader.
	foreach (glob("plugins/*.php") as $filename) {
		include_once "./$filename";
	}

	$plugins = array(
		// specify enabled plugins here
		new AdminerDatabaseHide(array("mysql", "information_schema", "performance_schema")),
		new AdminerLoginServers(array(filter_input(INPUT_SERVER, 'SERVER_NAME'))),
		new AdminerTheme(),
		new AdminerSimpleMenu(),
		new AdminerJsonPreview(),
	);

	return new AdminerPlugin($plugins);
}

// Include original Adminer or Adminer Editor.
include "./adminer.php";
