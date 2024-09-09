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

    $config = [
        "servers" => [
            "mysql://$serverHost" => $serverName,
            "elastic://$serverHost:9200" => $serverName,
        ],
        "theme" => "default-orange",
    ];

    if (file_exists("config.php")) {
        include_once "config.php";
    }

    // Specify enabled plugins here.
    $plugins = [
        new AdminerDatabaseHide(["mysql", "information_schema", "performance_schema"]),
        new AdminerLoginServers($config["servers"]),
        new AdminerTablesFilter(),
        new AdminerSimpleMenu(),
        new AdminerCollations(),
        new AdminerJsonPreview(),

        // AdminerTheme has to be the last one.
        new AdminerTheme($config["theme"]),
    ];

    return new AdminerPlugin($plugins);
}

// Include original Adminer or Adminer Editor.
include "./adminer.php";
