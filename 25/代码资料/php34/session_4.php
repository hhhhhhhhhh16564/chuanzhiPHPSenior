<?php


// require './userSession.php';
ini_set('session.use_only_cookies', '0');
ini_set('session.use_trans_sid', '1');
session_start();

// session_destroy();
var_dump($_SESSION);