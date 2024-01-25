<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    // Use exec to run the Python script and capture its output
    exec('python3 temp1.py ' . escapeshellarg($username), $output);

    // Print the Python script output
    foreach ($output as $line) {
        echo $line . "<br>";
    }
}
?>
