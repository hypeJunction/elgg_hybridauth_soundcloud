<?php

/**
 * Elgg HybridAuth
 */
// Composer autoload
elgg_register_event_handler('init', 'system', 'elgg_hybridauth_soundcloud_init');

/**
 * Initialize the plugin
 * @return void
 */
function elgg_hybridauth_soundcloud_init() {
	elgg_register_plugin_hook_handler('config', 'hybridauth', 'elgg_hybridauth_soundcloud_config');
	elgg_extend_view('css/hybridauth/core', 'hybridauth/soundcloud/stylesheet.css');
}

/**
 * Prepares HybridAuth config
 *
 * @param string $hook   "config"
 * @param string $type   "hybridauth"
 * @param array  $return Config
 * @param array  $params Hook Params
 * @return array
 */
function elgg_hybridauth_soundcloud_config($hook, $type, $return, $params) {

	$return['providers']['Soundcloud']['path_libraries'] = __DIR__ . '/vendors/php-soundcloud/Services/';
	$return['providers']['Soundcloud']['wrapper'] = array(
		'path' => __DIR__ . '/vendors/hybridauth-soundcloud/Providers/Soundcloud.php',
		'class' => 'Hybrid_Providers_Soundcloud',
	);

	return $return;
}
