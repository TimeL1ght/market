<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Order extends Entity
{
    const CART = "cart";
    const DONE = "done";
}