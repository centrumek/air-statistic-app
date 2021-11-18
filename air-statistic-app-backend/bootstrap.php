<?php
require __DIR__ . '/vendor/autoload.php';

use App\System\DBConnector;
use Dotenv\Dotenv;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

$dbConnection = (new DBConnector())->getConnection();
