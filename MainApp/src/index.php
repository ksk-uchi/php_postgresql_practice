<?php

$dsn = 'pgsql:dbname=mydb;host=postgres;port=5432';
$user = 'root';
$pass = 'root';
 
try {
    $dbh = new PDO($dsn, $user, $pass);
    $sql = 'SELECT actor_id, first_name, last_name FROM actor LIMIT 10';
    foreach ($dbh->query($sql) as $row) {
        print $row[0] . ", " . $row[1] . "<br />\r\n";
    }
    $dbh = null;
} catch (PDOException $e){
    print('[ERROR] ' . $e->getMessage() . "\n");
    die();
}
