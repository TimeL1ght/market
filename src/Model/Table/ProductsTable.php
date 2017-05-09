<?php
namespace App\Model\Table;

use Cake\ORM\Table;


class ProductsTable extends Table
{
    public function initialize(array $config)
    {
    	$this->belongsTo('Categories');

    	$this->belongsToMany('Orders', [
    		'through' => 'OrdersProducts',
    	]);

    	$this->hasMany('OrdersProducts');
    }
}