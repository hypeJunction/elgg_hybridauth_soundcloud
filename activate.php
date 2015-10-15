<?php

$providers = elgg_get_plugin_setting('providers', 'elgg_hybridauth');

if ($providers) {

	$providers = unserialize($providers);

	if (!isset($providers['Soundcloud'])) {
		if (isset($providers['SoundCloud'])) {
			$providers['Soundcloud'] = $providers['SoundCloud'];
			unset($providers['SoundCloud']);
		} else {
			$providers['Soundcloud'] = array(
				"enabled" => false,
				"keys" => array("key" => "", "secret" => "")
			);
		}
		elgg_set_plugin_setting('providers', serialize($providers), 'elgg_hybridauth');
	}
}


