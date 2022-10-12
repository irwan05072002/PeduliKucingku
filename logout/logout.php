<?php

// start session
session_start();

// delete all session
session_destroy();

// direct to login homepage
header("location: ../index.php");

?>