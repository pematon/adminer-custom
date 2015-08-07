<?php

/**
 * Custom character sets in collation select boxes.
 *
 * @author Peter Knut
 * @copyright 2015 Pematon, s.r.o. (http://www.pematon.com/)
 */
class AdminerCollations
{
	/** @var array */
	private $characterSets;

	/**
	 * @param array $characterSets Array of allowed character sets.
	 */
	function AdminerCollations(array $characterSets = array('utf8mb4_general_ci'))
	{
		$this->characterSets = $characterSets;
	}

	/**
	 * Prints HTML code inside <head>.
	 * @return null
	 */
	public function head()
	{
		if (empty($this->characterSets)) {
			return;
		}

		?>

		<script>
			(function(window) {
				"use strict";

				const selectNamePattern = /^([cC]ollation|fields\[[0-9]+]\[collation])$/;

				const characterSets = [
					<?php
						echo "'(" . lang('collation') . ")'";

						foreach ($this->characterSets as $characterSet) {
							echo ", '" . $characterSet . "'";
						}
					?>
				];

				window.addEventListener("load", function () {
					replaceCollations();
				}, false);

				function replaceCollations() {
					var selects = document.getElementsByTagName("select");

					for (var i = 0; i < selects.length; i++) {
						if (selectNamePattern.test(selects[i].name)) {
							replaceOptions(selects[i]);
						}
					}
				}

				function replaceOptions(select) {
					var selectedSet = getSelectedSet(select);
					var html = '';
					var hasSelected = false;

					for (var i = 0; i < characterSets.length; i++) {
						if (characterSets[i] == selectedSet) {
							hasSelected = true;
							html += '<option selected="selected">' + characterSets[i] + '</option>';
						} else {
							html += '<option>' + characterSets[i] + '</option>';
						}
					}

					if (!hasSelected && selectedSet !== "") {
						html += '<option selected="selected">' + selectedSet + '</option>';
					}

					select.innerHTML = html;
				}

				function getSelectedSet(select) {
					var options = select.getElementsByTagName("option");

					for (var i = 0; i < options.length; i++) {
						if (options[i].selected) {
							return options[i].innerHTML.trim();
						}
					}

					return "";
				}
			})(window);

		</script>

		<?php
	}
}
