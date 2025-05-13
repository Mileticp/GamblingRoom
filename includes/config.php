<?php
// Session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.cookie_samesite', 'Strict');
ini_set('session.gc_maxlifetime', 3600);
ini_set('session.use_strict_mode', 1);

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Time zone setting
date_default_timezone_set('Europe/Ljubljana');

// Constants
define('MAX_PLAYERS', 3);
define('DICE_PER_PLAYER', 3);
define('DICE_MAX_VALUE', 6); 