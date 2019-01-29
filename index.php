<?php

require "./vendor/autoload.php";
require "./config/settings.php";

$config = new \Doctrine\DBAL\Configuration();

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

# $sql = "SELECT ID, name FROM demo";
# $stmt = $conn->query($sql);

$queryBuilder = $conn->createQueryBuilder();

$queryBuilder
    ->select('id', 'name')
    ->from('users')
;

while($row = $stmt->fetch()){
    echo "ID: ".$row['ID']."Name: ".$row['name']."\n";
}

?>