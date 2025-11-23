<?php
/**
 * Simple PHP server entry point for deployment
 * This script ensures the server uses the correct port from environment
 */

$port = getenv('PORT') ?: '5000';
$host = '0.0.0.0';

echo "Starting PHP server on $host:$port\n";

$command = "php -S $host:$port";
passthru($command);
?>
