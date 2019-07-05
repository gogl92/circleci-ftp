<?php

use FtpClient\FtpClient;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        $ftp = new FtpClient();
        $ftp->connect('127.0.0.1:21');
        $ftp->login('bob', '123456');
        // scan the current directory and returns the details of each item
        $items = $ftp->scanDir();
        $this->assertNotNull($items);
        // scan the current directory (recursive) and returns the details of each item
        $this->assertNotEmpty($ftp->scanDir('.', true));

    }
}