<?php
session_start();

function getUserFirstname() {
    return isset($_SESSION['user_firstname']) ? $_SESSION['user_firstname'] : null;
}
?>
