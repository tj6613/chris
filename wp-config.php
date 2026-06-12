<?php

define('DB_NAME', 'chris');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

$table_prefix = 'wp_';

/**
 * Authentication Unique Keys and Salts.
 * Replace these later if you want, but these will work locally.
 */
define('AUTH_KEY',         'chris-local-auth-key-2026-1');
define('SECURE_AUTH_KEY',  'chris-local-secure-auth-key-2026-2');
define('LOGGED_IN_KEY',    'chris-local-logged-in-key-2026-3');
define('NONCE_KEY',        'chris-local-nonce-key-2026-4');
define('AUTH_SALT',        'chris-local-auth-salt-2026-5');
define('SECURE_AUTH_SALT', 'chris-local-secure-auth-salt-2026-6');
define('LOGGED_IN_SALT',   'chris-local-logged-in-salt-2026-7');
define('NONCE_SALT',       'chris-local-nonce-salt-2026-8');

/**
 * Environment
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/**
 * URLs
 */
define('WP_HOME', 'http://allbikesvault');
define('WP_SITEURL', 'http://allbikesvault/wp');

/**
 * Move content out of core
 */
define('WP_CONTENT_DIR', __DIR__ . '/web/app');
define('WP_CONTENT_URL', 'http://allbikesvault/app');
/**
 * Optional upload path
 */
define('UPLOADS', 'app/uploads');

/**
 * Absolute path to WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/web/wp/');
}

require_once ABSPATH . 'wp-settings.php';