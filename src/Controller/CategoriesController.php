<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriesController extends AppController
{
	public function index() {
		$categories = $this->Categories->find('all');
		$this->set('categories', $categories);
	}

	public function view($id) {
		$category = $this->Categories->get($id, ['contain' => 'Products']);
		$this->set('category', $category);
	}

	public function test() {
		$categories = $this->Categories->find()->all();
		$this->set('categories', $categories);
		$this->set('_serialize', ['categories']);
	}

	public function test2() {
		return $this->json(['key' => 'value']);
	}
}

