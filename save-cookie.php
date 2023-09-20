<?php
setcookie("name", "Bob", time() + 1800, "/view-cookie.php/");
setcookie("theme", "light");
echo "See view-cookie.php";
