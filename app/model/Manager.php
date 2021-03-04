<?php
namespace app\model;

class Manager
{
    protected function dbConnect()
    {
        $user = 'dbu480933';
        $password = 'RockMyRoot777!?';
        $host = 'db5001724432.hosting-data.io';
        $dbname = 'dbs1424304';

        //$db = new \PDO('mysql:host=db5001724432.hosting-data.io;dbname=dbs1424304', 'dbu480933', 'RockMyRoot777!?');         //web
        $db = new \PDO('mysql:host=localhost;dbname=p4', 'root', '');                                                      //local version
        return $db;
    }
}