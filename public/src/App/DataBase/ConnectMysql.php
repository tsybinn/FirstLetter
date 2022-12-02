<?php

namespace App\DataBase;

use PDO;

class ConnectMysql implements ConnectDbInterface
{
    public static string $dsn = 'mysql:dbname=bitrix;host=172.16.1.15';
    public static string $user = 'bitrix';
    public static string $pass = 'password';

    public static ?object $DB = null;

    public static function get()
    {
        if (!self::$DB) {
            try {
                self::$DB = new \PDO(
                    self::$dsn, self::$user, self::$pass, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
              //  self::$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            } catch (PDOException $e) {
                exit('Error connecting to database: ' . $e->getMessage());
            }
        }

        return self::$DB;
    }
}








// class ConnectMysql
// {
//
//     private PDO $DB;
//     private string $host = '172.16.1.15';
//     private string $dbname = 'dev';
//     private string $user = 'bitrix';
//     private string $pass = 'password';
//
//     public function __construct()
//     {
//
//         try {
//             $this->DB = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
//             $this->DB->exec("set names utf8");
//         } catch (PDOException $e) {
//             echo "Your query failed: " . $e->getMessage();
//         }
//
//         return $this->DB;
//     }
//
// }