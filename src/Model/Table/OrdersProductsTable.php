<?php
namespace App\Model\Table;

use Cake\ORM\Table;


class OrdersProductsTable extends Table
{
	public function initialize(array $config) 
	{
		$this->belongsTo('Orders');
		$this->belongsTo('Products');
	}
}