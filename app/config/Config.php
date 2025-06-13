<?php

/**
 * Database Configuration
 *
 * Define the constants for the database connection.
 */
define("DB_HOST", "localhost"); // you can add specified port number ex: localhost:3306
define("DB_USER", "root");
define("DB_PASS", "12345678");
define("DB_NAME", "test");

/**
 * Base URL Configuration
 *
 * Define the base URL for the application.
 */
define("BASEURL", "http://localhost");

/**
 * Environment Configuration
 *
 * Set the environment mode for the application.
 * Possible values: 'development', 'production', etc.
 */
define("ENVIRONMENT", "development");

/**
 * Disable Error Reporting on Production
 */
if (ENVIRONMENT === "production") {
    error_reporting(0);
    ini_set("display_errors", "Off");
}

?>
