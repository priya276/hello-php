<?php
session_start();
?>
<html>
    <body>
        <?php
            echo "Welcome, " . $_SESSION["username"] . "<br>";
        ?>
    </body>
    Logout <a href = "logout.php" tite = "Logout"> here
</html>

