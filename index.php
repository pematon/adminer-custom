<?php

function adminer_object()
{
    // Required to run any plugin.
    include_once "./plugins/plugin.php";

    // Plugins auto-loader.
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }

    $serverHost = filter_input(INPUT_SERVER, 'HTTP_HOST');
    $serverName = filter_input(INPUT_SERVER, 'SERVER_NAME');

    // Specify enabled plugins here.
    $plugins = [
        new AdminerDatabaseHide(["mysql", "information_schema", "performance_schema"]),
        new AdminerLoginServers([
            $serverHost => $serverName,
            "elastic://$serverHost:9200" => $serverName,
        ]),
        new AdminerTablesFilter(),
        new AdminerSimpleMenu(),
        new AdminerCollations(),
        new AdminerJsonPreview(),

        // AdminerTheme has to be the last one.
        new AdminerTheme(),
    ];

    return new AdminerPlugin($plugins);
}

// Include original Adminer or Adminer Editor.
include "./adminer.php";
