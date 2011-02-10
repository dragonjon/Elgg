<?php
/**
 * Used to show plugin user settings.
 *
 * @package Elgg.Core
 * @subpackage Plugins
 */

$plugin = $vars['plugin'];
$plugin_id = $plugin->getID();
$user_guid = elgg_get_array_value('user_guid', $vars, elgg_get_logged_in_user_guid());

// Do we want to show admin settings or user settings
$type = elgg_get_array_value('type', $vars, '');

if ($type != 'user') {
	$type = '';
}

echo elgg_view("{$type}settings/{$plugin_id}/edit", $vars);

echo "<p>";
echo elgg_view('input/hidden', array('internalname' => 'plugin_id', 'value' => $plugin_id));
echo elgg_view('input/hidden', array('internalname' => 'user_guid', 'value' => $user_guid));
echo elgg_view('input/submit', array('value' => elgg_echo('save'))); 
echo "</p>";

