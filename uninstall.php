<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit; // Exit if accessed directly
}

require 'NWCS_GitHub_Manager.php';

$pusher->make('Pusher\Storage\Database')->uninstall();

// Deactivate license
$client = $pusher->make('Pusher\License\LicenseApi');

$key = get_option('nwcybersolutions_gm_license_key', false);

if ($key) {
    $client->removeLicenseFomSite($key);
}

// Clean up
delete_option('hide-nwcybersolutions_gm-welcome');
delete_option('nwcybersolutions_gm_token');
delete_option('nwcybersolutions_gm_license_key');
delete_option('gh_token');
delete_option('bb_user');
delete_option('bb_pass');
delete_option('bb_token');
delete_option('gl_base_url');
delete_option('gl_private_token');
delete_option('pusher_logging_enabled');
