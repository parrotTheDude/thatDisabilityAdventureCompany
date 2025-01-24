<?php

// Database connection function
function db_connect($server = DB_SERVER, $username = DB_SERVER_USERNAME, $password = DB_SERVER_PASSWORD, $database = DB_DATABASE, $link = 'db_link') {
    global $$link;

    // Establish a connection using mysqli
    $$link = new mysqli($server, $username, $password, $database);

    // Check for connection errors
    if ($$link->connect_error) {
        // Log the error (optional) and exit gracefully
        error_log("Database connection failed: " . $$link->connect_error);
        die("Error: Unable to connect to the database.");
    }

    return $$link;
}

// Database close function
function db_close($link = 'db_link') {
    global $$link;

    // Close the database connection if it exists
    if (isset($$link)) {
        return $$link->close();
    }

    return false;
}
?>