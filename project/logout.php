<?php
session_start();
if (isset($_SESSION['email'])) {
}
else{ 
    header('Location: homepage.php');
}
session_destroy();
header('Location: homepage.php');

