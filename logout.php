<?php
session_start();
session_destroy();
header("Location: upcomingevents.php");
exit();