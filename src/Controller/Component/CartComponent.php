<?php
namespace App\Controller\Component;

use Cake\ORM\TableRegistry;
use App\Model\Entity\Order;
use Cake\Controller\Component;


class CartComponent extends Component
{
	protected function _newCart($userId)
	{
			$oTable = TableRegistry::get('Orders');
			$cart = $oTable->newEntity([
				'user_id' => $userId,
				'status' => Order::CART,
			]);
			$oTable->save($cart);

			return $cart;
	}


	public function getCart($userId)
	{
		$cart = TableRegistry::get('Orders')
			->find()
			->where(['status' => Order::CART, 'user_id' => $userId])
			->first();

		if (!$cart) {
			$cart = $this->_newCart($userId);
		}

		return $cart;
	}


	public function clearCart($userId)
	{
		$cart = $this->getCart($userId);
		$opTable = TableRegistry::get('OrdersProducts');
		$items = $opTable->find('all')->where(['order_id' => $cart->id]);
		foreach ($items as $item) {
			$opTable->delete($item);
		}
	}


	public function submitCart($userId)
	{
		$oTable = TableRegistry::get('Orders');
		$cart = $this->getCart($userId);
		$cart->status = Order::DONE;
		$oTable->save($cart);
	}
}