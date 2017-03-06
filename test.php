<?php
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <body>
        List of MunchKids <?php echo $_GET['user'] . "<br/>"; ?>
        <?php
        require_once("Includes/db.php");

        $userID = munchKitDB::getInstance()->get_user_id_by_email($_GET['user']);
        if (!$userID) {
            exit("The email " . $_GET['user'] . " is not found. Please check the spelling and try again");
        }
        ?>
        <table border="black">
            <tr>
                <th>Name</th>
                <th>Diet</th>
            </tr>
            <?php
            $result = munchKitDB::getInstance()->get_child_by_user_id($userID);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . htmlentities($row['f_name']) . "</td>";
                echo "<td>" . htmlentities($row['dietType']) . "</td></tr>\n";
            }
            mysqli_free_result($result);
            ?>
        </table>
    </body>
</html>