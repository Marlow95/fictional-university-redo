<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CRdEPPgtZlKv3zsk7c0YaN51ndjndH9keuppn+dNcy0vaIqE3xZYNLjZ0lPZPhMlLOuaMLcE7aPYYM9t8RhTJg==');
define('SECURE_AUTH_KEY',  'yxcKGbgjSsDJEzL/1kSJaYiGh1NXKEsfHsrAt5QNfUYifdi40yCqzYbVxHr75GIZmNexfFbLfp2VrNR0GAs6Tw==');
define('LOGGED_IN_KEY',    'ujuVZq1AJeVjbXD6PfYVxUlMhN4cNJgt6elnJGA2QW/9P06fbAT3IuX0WBM++NWf8Fc6/+D9k0ooJ1fr8LRbBg==');
define('NONCE_KEY',        'Ux9zAT2YdYp2LOb2sbXMdmXbDXDAU/4dNe8yNJoAbxuq/US1HiGC6c9d8s2+gY9blJuQszCM0ylsXFZboTorYQ==');
define('AUTH_SALT',        'l6AWXo2x2n2j3/xIQ+TbpSnAmSeq6No4dYhzG6HSOJJ1VjiDkQ67iuVNec4wEaqIuf7zF9/TGxwWAMxykMiyFQ==');
define('SECURE_AUTH_SALT', 'UazOcFKPas9z1ikLntaRIgqZi9TApHQNSO9SxLptbrvuELBJ/vcJyfLGcKDuzBXpFvvTCLbeePSMMGawMcPF1Q==');
define('LOGGED_IN_SALT',   '+ONLh6eHchkDu0kKeYUE57Wlez5sp7/7B+kW/3kal8U3h5JAnw/gdQTlg0B3Uv3xWFatrzSBj7rYjHa+8RAbyQ==');
define('NONCE_SALT',       'HQMSHc0SKjJPmrFAdjyYvJxvr4W5wOrTrydE9NLNG2DMaXghNJPNi2ihRFGjBj0RtPIAsFvYH79ligDkJdICYA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
