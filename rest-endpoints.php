<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observer( 'rest_endpoints', [
	'update' => function ( Underpin $plugin ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Rest_Endpoint.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Rest_Endpoint_Instance.php' );
	$plugin->loaders()->add( 'rest_endpoints', [
		'instance' => 'Underpin_Rest_Endpoints\Abstracts\Rest_Endpoint',
		'default'  => 'Underpin_Rest_Endpoints\Factories\Rest_Endpoint_Instance',
	] );
	},
] ) );