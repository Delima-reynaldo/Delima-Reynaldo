<?php
session_start();

// Destroy the session
session_destroy();
header('Location: /SP404/phpdemo/13_session.php');