<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';

    // Perform authentication (replace with actual logic)
    $authenticated = authenticateUser($username, $password);

    // Respond with a JSON message
    if ($authenticated) {
        echo json_encode(['message' => 'Login successful']);
    } else {
        echo json_encode(['message' => 'Invalid username or password']);
    }
} else {
    echo json_encode(['message' => 'Invalid request method']);
}

function authenticateUser($username, $password) {
    // Implement your authentication logic here (e.g., check against a database)
    // For this example, a basic check is performed (replace with actual logic)
    return ($username === 'user' && $password === 'password');
}
?>
