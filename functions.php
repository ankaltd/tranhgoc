<?php

/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

// Include Constants
require_once(__DIR__ . '/app/constants.php');

// Include Router
require_once(__DIR__ . '/app/wep-router.php');

// Include Autoload for core classes
require_once(__DIR__ . '/app/autoloader.php');

// Setup Theme
new WEP_Setup;

// Routing
new WEP_Router;
