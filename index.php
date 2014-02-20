<?php
/**
 * WordPress Entry Script
 */

/** Composer autoloader */
require_once(__DIR__ . '/vendor/autoload.php');

/** Tells WordPress to load the WordPress theme and output it. */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require(__DIR__ . '/wp/wp-blog-header.php' );