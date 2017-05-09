<?php
namespace App\Model\Table;

use Cake\ORM\Table;


class OrdersTable extends Table
{
	public function initialize(array $config) 
	{
		$this->addBehavior('Timestamp');
		
		$this->belongsToMany('Products', [
			'through' => 'OrdersProducts',
		]);

		$this->hasMany('OrdersProducts');
	}
}