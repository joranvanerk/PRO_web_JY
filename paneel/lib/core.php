<?php
// (A) ERROR REPORTING
error_reporting(E_ALL & ~E_NOTICE);

// (B) DATABASE SETTINGS
define('DB_HOST', 'localhost');
define('DB_NAME', 'u40096p40200_spacey');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'u40096p40200_spacey');
define('DB_PASSWORD', 'spaceyproject');

// (C) FILE PATHS
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);

// (D) START SESSION
session_start();