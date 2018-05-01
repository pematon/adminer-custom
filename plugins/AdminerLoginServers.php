<?php


/**
 * Displays constant list of servers in login form.
 *
 * Configuration is similar to the original "login-servers" plugin but – the killer feature – each server can have
 * a different driver!
 *
 * @link https://github.com/pematon/adminer-plugins
 *
 * @author Jakub Vrana, https://www.vrana.cz/
 * @author Peter Knut
 * @copyright 2014-2018 Pematon, s.r.o. (http://www.pematon.com/)
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerLoginServers
{
    /** @var array */
    private $servers;

    /** @var string */
    private $defaultDriver;

    /** @var array */
    private $loginParams;

    /**
     * Sets lists of supported database servers.
     *
     * Database server can be prefixed with driver name and can contain port and database name.
     * For example:
     * - mysql://localhost:3306 (server host and port)
     * - pgsql://localhost#database_name (server and database name)
     * - sqlite://database.db (relative path to database file, no authentication)
     * - sqlite://user:password@/var/www/#database.db (authentication, absolute path as 'server' and file name as 'database')
     *
     * Possible driver names are: `sqlite`, `sqlite2`, `pgsql`, `firebird`, `oracle`, `simpledb`, `elastic`, `mysql`,
     * `mongo`, `mssql`. Default driver is `mysql`.
     *
     * @param array $servers array(database-server) or array(database-server => description) or array(category => array())
     * @param string $defaultDriver Will be used if driver is not specified within server.
     */
    public function __construct(array $servers, $defaultDriver = "mysql")
    {
        $this->defaultDriver = $this->sanitizeDriver($defaultDriver);

        $this->servers = [];
        $this->loginParams = [];

        $this->parseServers($servers, $this->servers, $this->loginParams);
    }

    /**
     * Checks whether current server is in a list of supported servers.
     * For SQLite database, verify also user name and password.
     *
     * @param string $username
     * @param string $password
     *
     * @return bool
     */
    public function login($username, $password)
    {
        $params = $this->checkServer($this->servers, SERVER, DB);
        if (!$params) {
            return false;
        }

        if ($this->isSQLite($params["driver"])) {
            return $username == $params["username"] && password_verify($password, $params["password"]);
        }

        return true;
    }

    private function checkServer(array $servers, $server, $database)
    {
        foreach ($servers as $key => $value) {
            if (is_array($value)) {
                if ($params = $this->checkServer($value, $server, $database)) {
                    return $params;
                }
            } else {
                if ($key != $server) {
                    continue;
                }

                $params = $this->loginParams[$key];

                if (!$this->isSQLite($params["driver"]) || $params["database"] == $database) {
                    return $params;
                }
            }
        }

        return false;
    }

    private function parseServers(array $servers, array &$out, array &$loginParams)
    {
        foreach ($servers as $key => $value) {
            if (is_array($value)) {
                $out[$key] = [];
                $this->parseServers($value, $out[$key], $loginParams);
            } else {
                $this->parseServer(is_string($key) ? $key : $value, $params);

                $out[$params["server"]] = "(" . $this->formatDriver($params["driver"]) . ") " .
                    $params["server"] .
                    ($params["database"] ? " » " . $params["database"] : "");

                $loginParams[$params["server"]] = $params;
            }
        }
    }

    private function parseServer($server, &$params)
    {
        $matches = [];
        preg_match('~^(([^:]+)://)?(([^:@]+)(:([^@]+)?)?@)?([^#]+)(#(.*))?$~', $server, $matches);

        $driver = $matches[2];
        $username = $matches[4];
        $password = $matches[6];
        $server = $matches[7];
        $database = isset($matches[9]) ? $matches[9] : "";

        // Default driver is 'server'. It is used also for MySQL.
        $driver = $driver == "" ? $this->defaultDriver : $this->sanitizeDriver($driver);

        $sqlite = $this->isSQLite($driver);
        if ($sqlite && $database == "") {
            $database = $server;
            $server = "";
        }

        if (!$sqlite && $username != "") {
            throw new InvalidArgumentException("User name and password in server URI can be used only with 'sqlite' and 'sqlite2' drivers.");
        }

        $params = [
            "driver" => $driver,
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "server" => $server,
            "database" => $database,
        ];
    }

    private function isSQLite($driver)
    {
        return $driver == "sqlite" || $driver == "sqlite2";
    }

    private function sanitizeDriver($driver)
    {
        return $driver == "mysql" ? "server" : $driver;
    }

    private function formatDriver($driver)
    {
        static $drivers = [
            "server" => "MySQL",
            "sqlite" => "SQLite 3",
            "sqlite2" => "SQLite 2",
            "pgsql" => "PostgreSQL",
            "oracle" => "Oracle",
            "mssql" => "MS SQL",
            "firebird" => "Firebird",
            "simpledb" => "SimpleDB",
            "mongo" => "MongoDB",
            "elastic" => "Elasticsearch",
        ];

        return isset($drivers[$driver]) ? $drivers[$driver] : $driver;
    }

    public function loginForm()
    {
        ?>

        <table cellspacing="0">
            <tr>
                <th><?php echo lang('Server'); ?></th>
                <td>
                    <select name="auth[server]"><?php echo optionlist($this->servers, SERVER); ?></select>
                </td>
            <tr>
                <th><?php echo lang('Username'); ?></th>
                <td><input id="username" name="auth[username]" value="<?php echo h($_GET["username"]); ?>"></td>
            </tr>
            <tr>
                <th><?php echo lang('Password'); ?></th>
                <td><input type="password" name="auth[password]"></td>
            </tr>
        </table>

        <p><input type="submit" value="<?php echo lang('Login'); ?>">

        <?php
        echo checkbox("auth[permanent]", 1, $_COOKIE["adminer_permanent"], lang('Permanent login')) . "\n";
        ?>

        <input type="hidden" name="auth[driver]" value="">
        <input type="hidden" name="auth[db]" value="">

        <script <?php echo nonce(); ?>>
            (function(document) {
                "use strict";

                var loginParams = {
                    <?php
                    $count = count($this->loginParams);
                    $i = 1;
                    foreach ($this->loginParams as $server => $params) {
                        echo "'$server': { 'driver': '" . $params["driver"] . "', 'database': '" . $params["database"] . "' }";
                        if ($i++ < $count) {
                            echo ",";
                        }
                    }
                    ?>
                };

                var serverSelect = document.querySelector("select[name='auth[server]']");
                var driverInput = document.querySelector("input[name='auth[driver]']");
                var databaseInput = document.querySelector("input[name='auth[db]']");

                serverSelect.addEventListener("change", changeServer, false);
                changeServer();

                function changeServer() {
                    var server = serverSelect.options[serverSelect.selectedIndex].value;

                    driverInput.value = loginParams[server].driver;
                    databaseInput.value = loginParams[server].database;
                }
            })(document);
        </script>

        <?php

        return true;
    }
}
