<?php

// Include the database configuration file
include 'config.php';

// Check if the wpm and username parameters are set in the query string
if (isset($_GET['wpm']) && isset($_GET['username'])) {
    // Get the values of the wpm and username parameters
    $wpm = $_GET['wpm'];
    $username = $_GET['username'];

    // Validate the input to ensure that it meets the expected format and constraints
    if (is_numeric($wpm) && preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
        // Use a prepared statement and bound parameters to protect against SQL injection attacks
        $stmt = $pdo->prepare("SELECT MAX(id) as nxtid FROM rank");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Get the next available id value for the new row
        $id = $result['nxtid'] + 1;

        // Use a prepared statement and bound parameters to insert a new row into the rank table
        $stmt = $pdo->prepare("INSERT INTO rank (id, username, wpm) VALUES (?, ?, ?)");
        $stmt->execute([$id, $username, $wpm]);

        // Return a success message
        echo "Done!";
    } else {
        // Return an error message
        echo "Something went wrong";
    }
} else {
    // Return an error message
    echo "Something went wrong";
}

?>
