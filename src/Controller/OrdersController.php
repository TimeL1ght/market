<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Order;


class OrdersController extends AppController
{
	public function index() {
		$orders = $this->Orders->find('all')
			->where(['status !=' => Order::CART, 'user_id' => $this->Auth->user('id')]);
		
		$this->set('orders', $orders);
	}


	public function view($id)
	{
		$order = $this->Orders->get($id, ['contain' => 'Products']);
		$this->set('order', $order);
	}
}

