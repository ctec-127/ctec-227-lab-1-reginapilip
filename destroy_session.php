<?php // destroy_session.php
session_start();

// unset variables
unset($_SESSION['views']);
unset($_SESSION['browser']);
unset($_SESSION['role']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Destroy Session</title>
</head>
<body>
    <div class="header-content">
        <h1>Lab No. 1</h1>
    </div>
    <div class="main-content">
        <h1>Links</h1>
            <ul>
                <li><a href="create_session.php">Create Session</a></li>
                <li><a href="read_session.php">Read Session</a></li>
                <li><a href="destroy_all_session.php">Destroy All</a></li>
            </ul>
    </div>
</body>
</html>