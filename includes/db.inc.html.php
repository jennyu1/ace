<?php
/**
 * User: jenny
 * Date: 05/11/2019
 * Time: 9:38 PM
 */
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=jiyuwebh_ace_db', 'jiyuwebh_ace', 'myP4ssw0rd');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    echo $e;
    include 'error.html.php';
    exit();
}