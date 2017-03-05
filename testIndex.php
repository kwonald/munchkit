<?php
require_once("Includes/db.php");
$logonSuccess = false;

// verify user's credentials
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $logonSuccess = (munchKitDB::getInstance()->verify_user_credentials($_POST['user'], $_POST['userpassword']));
    if ($logonSuccess == true) {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        header('Location: test.php');
        exit;
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Testing DB connection</title>
    </head>
    <body>
        <form name="userList" action="test.php" method="GET">
            Show Children of email: <input type="text" name="user"/>
            <input type="submit" value="Go" />
        </form>
        <!-- Still don't have a wish list?! <a href="createNewWisher.php">Create now</a> -->
        <form name="logon" action="index.php" method="POST" >
            Email: <input type="text" name="user"/>
            Password  <input type="password" name="userpassword"/>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (!$logonSuccess)
                    echo "Invalid name and/or password";
            }
            ?>
            <input type="submit" value="Edit My Wish List"/>
        </form>
    </body>
</html>
