<?php

namespace App\Order;
use PDO;
use App\DataBase\ConnectMysql;

class Order implements OrderInterface
{

    private object $DB;

     function __construct()
    {
        $this->DB = ConnectMysql::get();
    }

    public function set(string $orderName, int $userId, int $sum): bool
    {
        $sql = "INSERT INTO `ORDER` (
                     NAME,
                     USER_ID,
                     DESCRIPTION,
                     SUM,
                     DATE)

VALUES ('$orderName',
        '$userId',
        'DESCRIPTION',
        '$sum',
        CURRENT_TIMESTAMP)";
        return $this->DB->exec($sql);
    }

    public function getAll(): array
    {
        $sql = "SELECT ID,NAME FROM `ORDER`";
      return  $result = $this->DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }

}