<?php
    require_once('../libs/mysql.noout.inc.php');

    $query = "SELECT * FROM users WHERE id='" . $_GET['id'] . "' LIMIT 0, 1";
    dbQuery($query);
?>
