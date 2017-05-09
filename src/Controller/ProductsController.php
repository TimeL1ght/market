<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class ProductsController extends AppController
{
    public function index() 
    {
        $products = $this->Products->find('all')->contain(['Categories']);
        $this->set('products', $products);
    }

    public function view($id)
    {
        $product = $this->Products->get($id, ['contain' => 'Categories']);
        $this->set('product', $product);
    }

}
