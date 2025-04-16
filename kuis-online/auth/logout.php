<?php

require_once '../config/koneksi.php';

session_destroy();
header("Location: ../index.php");
exit();
?>