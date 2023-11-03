<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
session_destroy();
header("Location: index.php");
?>
