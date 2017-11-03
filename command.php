<?php

if ( ! defined( 'WP_CLI' ) ) {
	return;
}

/**
 * Test mixed-case command name, where `composer.json` name is mixed-case also.
 *
 * @when before_wp_load
 */
$test_mixed_case_command = function() {
	WP_CLI::success( 'Test Mixed Case Command Name' );
};
WP_CLI::add_command( 'TestMixedCaseCommand', $test_mixed_case_command );
