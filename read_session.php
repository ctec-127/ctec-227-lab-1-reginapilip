<?php 
// read_session.php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Read Session</title>
</head>
<body>
    <div class="header-content">
        <h1>Lab No. 1</h1>
    </div>

    <div class="main-content">
        <h1>Defined Variables</h1>
            <ul>
                <li><?= isset($_SESSION['views']) ? $_SESSION['views'] : "View count variable not set" ?></li>
                <li><?= isset($_SESSION['browser']) ? $_SESSION['browser'] : "Browser variable not set"?></li>
                <li><?= isset($_SESSION['role']) ? $_SESSION['role'] : "Role variable not set" ?></li>
            </ul>

        <h1>Links</h1>
            <ul>
                <li><a href="create_session.php">Create Session</a></li>
                <li><a href="destroy_session.php">Destroy Session</a></li>
                <li><a href="destroy_all_session.php">Destroy All</a></li>
            </ul>
    </div>
</body>
</html>