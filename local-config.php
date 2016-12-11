<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );

ini_set( 'display_errors', E_ALL );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-boilerplate/wp-content' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'supersecret');
define('SECURE_AUTH_KEY',  'supersecret');
define('LOGGED_IN_KEY',    'supersecret');
define('NONCE_KEY',        'supersecret');
define('AUTH_SALT',        'supersecret');
define('SECURE_AUTH_SALT', 'supersecret');
define('LOGGED_IN_SALT',   'supersecret');
define('NONCE_SALT',       'supersecret');
