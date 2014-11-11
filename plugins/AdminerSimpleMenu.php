<?php

/**
 * Displays only one prefered action in table list.
 *
 * Get rid of schizophrenic decisions between selecting data and showing table structure.
 * Optimize your workflow!
 *
 * @author Peter Knut
 * @copyright 2014 Pematon, s.r.o. (http://www.pematon.com/)
 */
class AdminerSimpleMenu
{
	/** @var bool */
	protected $prefereSelect;

	/** @var bool */
	protected $reorderLinks;

	/**
	 * @param bool Whether to prefere table selection before editing structure.
	 * @param bool Whether links above data table will be reordered to reflect workflow priority.
	 */
	function AdminerSimpleMenu($prefereSelect = TRUE, $reorderLinks = TRUE)
	{
		$this->prefereSelect = $prefereSelect;
		$this->reorderLinks = $reorderLinks;
	}

	function head()
	{

		?>

		<style>
			#tables {
				margin: 0;
				padding: 0.8em 1em;
				border-bottom: 1px solid #ccc;
				list-style: none;
			}
		</style>

		<?php

	}

	/**
	 * Prints table list in menu.
	 *
	 * @param array Table list.
	 * @return null
	 */
	function tablesPrint($tables)
	{
		if (defined("PMTN_ADMINER_THEME"))
			echo "<ul id='tables' class='simple'>\n";
		else
			echo "<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);' class='simple'>\n";

		foreach ($tables as $table => $status) {
			$name = Adminer::tableName($status);
			$active = in_array($table, array($_GET["select"], $_GET["edit"], $_GET["table"], $_GET["create"], $_GET["indexes"], $_GET["foreign"], $_GET["trigger"]));

			if ($this->prefereSelect) {
				$action = "select";
				$title = "Select data";
			} else {
				$action = "table";
				$title = "Show structure";
			}

			echo "<li>";
			if ($this->prefereSelect || support("table") || support("indexes")) {
				echo '<a href="' . h(ME) . $action . '=' . urlencode($table) . '"' . bold($active, (is_view($status) ? "view" : "")) . " title='" . lang($title) . "'>$name</a>";
			} else {
				echo "<span>$name</span>";
			}
			echo "</li>\n";
		}

		echo "</ul>\n";

		return TRUE;
	}

	/**
	 * Prints links after select heading.
	 *
	 * @param array result of SHOW TABLE STATUS
	 * @param string new item options, NULL for no new item
	 *
	 * @return null
	 */
	function selectLinks($tableStatus, $set = "")
	{
		if (!$this->reorderLinks)
			return;

		echo '<p class="links">';

		$links = array();

		if ($this->prefereSelect)
			$links["select"] = lang('Select data');

		if (support("table") || support("indexes"))
			$links["table"] = lang('Show structure');

		if (!$this->prefereSelect)
			$links["select"] = lang('Select data');

		if (support("table")) {
			if (is_view($tableStatus))
				$links["view"] = lang('Alter view');
			else
				$links["create"] = lang('Alter table');
		}

		if ($set !== null)
			$links["edit"] = lang('New item');

		foreach ($links as $key => $val) {
			echo " <a href='" . h(ME) . "$key=" . urlencode($tableStatus["Name"]) . ($key == "edit" ? $set : "") . "'" . bold(isset($_GET[$key])) . ">$val</a>";
		}

		echo "\n";

		return FALSE;
	}
}
