<?php
/**
 * WordPress Bootstrap Loader
 * 
 * Some plugins and themes try to load wp-load.php directly.
 * They don't know where it is located so they look up the folder tree until they find it.
 * This file allows them to find it, and includes the real wp-load.php
 */
require(__DIR__ . '/wp/wp-load.php');
