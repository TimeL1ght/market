<?php
namespace App\Controller;

use App\Controller\AppController;


class CheckoutController extends AppController
{

	public function index()
	{
		
	}


	public function submit()
	{
		$this->Cart->submitCart($this->Auth->user('id'));
	}
}