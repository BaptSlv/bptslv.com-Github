<?php
session_start();
session_unset();
session_destroy();
header('Location:/bptslv.com/index.html');
?>