<?php // destroy_all_session.php
session_start();

// destroys current session
session_destroy();


/* Difference between destroy_session and destroy_all_session:
   You may want to unset only one of the session variables and not all. This can be done using the unset(), while session_destroy() destroys all variables.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Destroy All Session</title>
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
                <li><a href="destroy_session.php">Destroy Session</a></li>
            </ul>
    </div>
</body>
</html>