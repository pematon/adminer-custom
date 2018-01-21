<?php


/**
 * Displays constant list of servers in login form.
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
    private $drivers;

    /**
     * Sets lists of supported database servers.
     * Database server can be prefixed with driver name. For example: mysql://localhost:3306
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
        $this->drivers = [];

        $this->parseServers($servers, $this->servers, $this->drivers);
    }

    /**
     * Checks whether current server is in a list of supported servers.
     *
     * @param string $login
     * @param string $password
     *
     * @return bool
     */
    public function login($login, $password)
    {
        return $this->checkServer($this->servers, SERVER);
    }

    private function parseServers(array $servers, array &$out, array &$drivers)
    {
        foreach ($servers as $key => $value) {
            if (is_array($value)) {
                $out[$key] = [];
                $this->parseServers($value, $out[$key], $drivers);
            } else {
                list($driver, $server) = $this->parseServer(is_string($key) ? $key : $value);

                $out[$server] = $value;
                $drivers[$server] = $driver;
            }
        }
    }

    private function checkServer(array $servers, $server)
    {
        foreach ($servers as $key => $value) {
            if (is_array($value)) {
                if ($this->checkServer($value, $server)) {
                    return true;
                }
            } else {
                if ($key == $server) {
                    return true;
                }
            }
        }

        return false;
    }

    private function parseServer($server)
    {
        $matches = [];
        preg_match('@^(([^:]+)://)?(.+)$@', $server, $matches);

        $driver = $matches[2];
        $server = $matches[3];

        // Default driver is 'server'. It is used also for MySQL.
        $driver = $driver == "" ? $this->defaultDriver : $this->sanitizeDriver($driver);

        return [$driver, $server];
    }

    private function sanitizeDriver($driver)
    {
        return $driver == "mysql" ? "server" : $driver;
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

        <script <?php echo nonce(); ?>>
            (function(document) {
                "use strict";

                var servers = {
                    <?php
                    $count = count($this->drivers);
                    $i = 1;
                    foreach ($this->drivers as $server => $driver) {
                        echo "'$server': '$driver'";
                        if ($i++ < $count) {
                            echo ",";
                        }
                    }
                    ?>
                };

                var serverSelect = document.querySelector("select[name='auth[server]']");
                var driverInput = document.querySelector("input[name='auth[driver]']");

                serverSelect.addEventListener("change", changeServer, false);
                changeServer();

                function changeServer() {
                    var server = serverSelect.options[serverSelect.selectedIndex].value;

                    driverInput.value = servers[server];
                }
            })(document);
        </script>

        <?php

        return true;
    }
}
