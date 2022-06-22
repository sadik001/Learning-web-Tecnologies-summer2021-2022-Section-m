<?php
if(!isset($_COOKIE['status'])){
    header('location: login_panel.html');
}
?>
<html>
    <body>

    <h1>Welcome Bob! <?php ?>
    <a href="login_panel.html">profile</a>
    <a href="login_panel.html">ChangePassword</a>
    <a href="login_panel.html">View Users</a>
    <a href="login_panel.html">Logout</a>
    </body>
</html>
<html>
    <body>

    <h1>Welcome <?php ?>
    <a href="login_panel.html">profile</a>
    <a href="login_panel.html">ChangePassword</a>
  
    <a href="login_panel.html">Logout</a>
    </body>
</html>
