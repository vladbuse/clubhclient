<?php
session_start();

if(!isset($_SESSION['username']))
    header("URL: ../login.php");