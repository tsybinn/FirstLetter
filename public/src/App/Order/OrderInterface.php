<?php

namespace App\Order;
interface OrderInterface
{

     function set(string $orderName,int $userId,int $sum):bool;

     function getAll():array;

}