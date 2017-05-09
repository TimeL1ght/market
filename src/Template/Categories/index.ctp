<h1>Product Categories</h1>

<ul>
<?php foreach ($categories as $category): ?>

	<li><?= $this->Html->link(h($category->name), ['action' => 'view', $category->id]) ?></li>

<?php endforeach; ?>
</ul>