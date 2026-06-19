<?php
// This PHP file demonstrates a basic script designed to be served by Nginx
// and processed by PHP-FPM (FastCGI Process Manager). It outputs server
// information to illustrate the environment in which it's running.

echo "<h1>Nginx + PHP-FPM Integration Demo</h1>";
echo "<p>This page is served by Nginx and processed by PHP-FPM.</p>";
echo "<hr>";

echo "<h2>Server Variables:</h2>";
echo "<pre>";

// Display key server variables that indicate Nginx and PHP-FPM interaction.
// GATEWAY_INTERFACE should typically be 'CGI/1.1' for FPM.
// FCGI_ROLE confirms the FastCGI role as 'RESPONDER'.
// SCRIPT_FILENAME and DOCUMENT_ROOT show the file path and web root.
// REQUEST_URI shows the requested URL path.

$relevant_vars = [
    'SERVER_SOFTWARE',   // May show Nginx or be generic depending on configuration
    'GATEWAY_INTERFACE', // Should be 'CGI/1.1' for FastCGI
    'REQUEST_METHOD',
    'REQUEST_URI',
    'DOCUMENT_ROOT',
    'SCRIPT_FILENAME',   // Full path to the executed script
    'REMOTE_ADDR',
    'SERVER_ADDR',
    'SERVER_PORT',
    'PHP_SELF',
    'SCRIPT_NAME',
    'FCGI_ROLE',         // Confirms the FastCGI role (e.g., RESPONDER)
    'PHP_FCGI_CHILD_ID', // Specific to PHP-FPM process
    'HTTP_HOST',
    'HTTP_USER_AGENT',
];

foreach ($relevant_vars as $var) {
    if (isset($_SERVER[$var])) {
        echo "$var: " . htmlspecialchars($_SERVER[$var]) . "\n";
    }
}

echo "</pre>";

echo "<hr>";
echo "<h2>PHP Info:</h2>";
// Display basic PHP version and Server API to confirm FPM is active.
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Server API: " . php_sapi_name() . " (should be 'fpm-fcgi' for PHP-FPM)</p>";

// Uncomment the line below for full PHP information, but it will produce a lot of output.
// phpinfo();

?>
