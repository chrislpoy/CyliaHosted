<?php
/**
 * Plugin name: Web Socket Plugin 
 * Description: Plugin for transferring Data
 * Version: 1.0.2
 * Text Domain: data_plugin
 * Author: CC dev
 */

require 'vendor/autoload.php'; // Include the Composer autoloader

use WebSocket\Client;

// WebSocket server URL
$serverUrl = 'ws://localhost:5000';

// Message to send
$message = 'hello there im chris';

try {
    // Create a new WebSocket client
    $client = new Client($serverUrl);

    // Send the message
    $client->send($message);

    // Close the connection
    $client->close();

    echo "Message sent successfully: $message\n";
} catch (Exception $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage() . "\n";
}
?>
