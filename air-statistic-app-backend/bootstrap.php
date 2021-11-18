<?php
require 'vendor/autoload.php';

use Dotenv\Dotenv;
use App\System\DBConnector;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

$dbConnection = (new DBConnector())->getConnection();