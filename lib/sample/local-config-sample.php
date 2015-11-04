<?php
// Local server settings

// Local Database
define('DB_NAME', 'database');
define('DB_USER', 'user');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');

// Overwrites the database to save keep editing the DB
define('WP_HOME','http://localhost/site/');
define('WP_SITEURL','http://localhost/site/');

// Turn on debug for local environment
define('WP_DEBUG', true);
