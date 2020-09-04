<?php
/**
* Plugin Name: Civi Health Check
* Plugin URI:
* Description: This plugin over-rides health check for civi until https://lab.civicrm.org/dev/wordpress/issues/32 is fixed.
* Version: 1.0
* Author: Pradeep Nayak
* Author URI: https://github.com/pradpnayak/
**/

function civi_health_check_remove_rest_availability($tests) {
    unset( $tests['direct']['rest_availability'] );
    return $tests;
}
add_filter( 'site_status_tests', 'civi_health_check_remove_rest_availability' );

function civi_health_check_remove_loopback_requests($tests) {
    unset( $tests['async']['loopback_requests'] );
    return $tests;
}
add_filter( 'site_status_tests', 'civi_health_check_remove_loopback_requests' );
