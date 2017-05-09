<h1>Product Category: '<?= $category->name ?>'</h1>

<ul>

<?php foreach ($category->products as $product): ?>
	<li><?= $this->Html->link(h($product->title), ['controller' => 'Products', 'action' => 'view', $product->id]) ?></li>
<?php endforeach; ?>

</ul>