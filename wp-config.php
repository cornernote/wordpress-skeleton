<?php
/**
 * WordPress Configuration
 *
 * Do not modify this file.
 * Instead use config.php or config.local.php
 */
 
/** Application configuration */
if (file_exists(__DIR__ . '/config.local.php'))
    require_once(__DIR__ . '/config.local.php');
else
    require_once(__DIR__ . '/config.php');

/** WordPress settings */
require_once(ABSPATH . 'wp-settings.php');