<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'functions.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$users = $query->selectAllUsers('User');

// $users = new QueryBuilder->selectAllUsers($pdo);

// var_dump($users);

require 'index.view.php';
