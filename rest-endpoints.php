<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $file, $class ) {
	require_once( plugin_dir_path( __FILE__ ) . 'Rest_Endpoint.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'Rest_Endpoint_Instance.php' );
	Underpin\underpin()->get( $file, $class )->loaders()->add( 'rest_endpoints', [
		'instance' => 'Underpin_Rest_Endpoints\Abstracts\Rest_Endpoint',
		'default'  => 'Underpin_Rest_Endpoints\Factories\Rest_Endpoint_Instance',
	] );
}, 10, 2 );