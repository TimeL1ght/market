<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class CartController extends AppController
{
	
	public function index()
	{
		$cart = $this->Cart->getCart($this->Auth->user('id'));

		$opTable = TableRegistry::get('OrdersProducts');
		$ordersProducts = $opTable->find()
			->where(['order_id' => $cart->id])
			->contain(['Orders', 'Products', 'Products.Categories'])
			->all();

		$this->set('ordersProducts', $ordersProducts);
	}


	public function add($id)
	{
		$cartId = $this->Cart->getCart($this->Auth->user('id'))->id;
		$opTable = TableRegistry::get('OrdersProducts');
		$exist = $opTable->find('all')->where(['order_id' => $cartId, 'product_id' => $id])->first();

		if ($exist) {
			$exist->quantity++;
			$opTable->save($exist);
		} else {
			$entity = $opTable->newEntity([
				'order_id' => $cartId,
				'product_id' => $id,
				'quantity' => 1,
			]);
			$opTable->save($entity);
		}

		return $this->redirect(['controller' => 'Products']);
	}


	public function delete($id)
	{
		$opTable = TableRegistry::get('OrdersProducts');
		$item = $opTable->get($id);
		$opTable->delete($item);

		return $this->redirect(['action' => 'index']);
	}


	public function clear()
	{
		$this->Cart->clearCart($this->Auth->user('id'));
		return $this->redirect(['action' => 'index']);
	}
}
