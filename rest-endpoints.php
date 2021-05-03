<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $class ) {
	if ( 'Underpin\Underpin' === $class ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Rest_Endpoint.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Rest_Endpoint_Instance.php' );
		Underpin\underpin()->loaders()->add( 'rest_endpoints', [
			'instance' => 'Underpin_Rest_Endpoints\Abstracts\Rest_Endpoint',
			'default'  => 'Underpin_Rest_Endpoints\Factories\Rest_Endpoint_Instance',
		] );
	}
} );