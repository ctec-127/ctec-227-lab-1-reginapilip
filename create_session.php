<?php // create_session.php


// start session
session_start();

// define 3 session variables
if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 0;
}
$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['role'] = 'admin';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Create Session</title>
</head>
<body>
    <div class="header-content">
        <h1>Lab No. 1</h1>
    </div>
    <div class="main-content">
        <h1>Defined Variables</h1>
            <ul>
                <li><?= $_SESSION['views']?></li>
                <li><?= $_SESSION['browser']?></li>
                <li><?= $_SESSION['role']?></li>
            </ul>

        <h1>Links</h1>
            <ul>
                <li><a href="read_session.php">Read Session</a></li>
                <li><a href="destroy_session.php">Destroy Session</a></li>
                <li><a href="destroy_all_session.php">Destroy All</a></li>
            </ul>
    </div>
</body>
</html>