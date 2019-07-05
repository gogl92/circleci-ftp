<?php

use FtpClient\FtpClient;

include './vendor/autoload.php';

$ftp = new FtpClient();
$ftp->connect('127.0.0.1:21');
$ftp->login('user', 'HelloWorld1234');
// scan the current directory and returns the details of each item
$items = $ftp->scanDir();

// scan the current directory (recursive) and returns the details of each item
var_dump($ftp->scanDir('.', true));