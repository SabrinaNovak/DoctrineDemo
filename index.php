<?php

require "./vendor/autoload.php";
require "./config/settings.php";

$config = new \Doctrine\DBAL\Configuration();

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

?>