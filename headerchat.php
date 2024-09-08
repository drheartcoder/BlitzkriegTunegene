<?php

require_once('database/db.php');
require_once('database/function.php');

if ( !isset($_SESSION['logged-user']) || $_SESSION['logged-user'] !== true) {

header('Location: index.php');

exit;

}

?>
