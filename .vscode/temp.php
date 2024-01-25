<?php
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Execute the Python script to analyze user risk
    $command = "data.py $username";
    $result = shell_exec($command);

    // Return the result to the frontend as JSON
    $response = array('username' => $username, 'risk_level' => $result);
    echo json_encode($response);
} else {
    echo json_encode(array('error' => 'Invalid request.'));
}
?>
