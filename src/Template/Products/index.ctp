<h1>All Products</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Category</th>
			<th>Description</th>
			<th>Price</th>
			<th></th>
		</tr>
	</thead>	
	<tbody>
	
		<?php foreach ($products as $product): ?>
			<tr>
				<td><?= $this->Html->link($product->title, ['action' => 'view', $product->id]) ?></td>
				<td><?= $this->Html->link($product->category->name, ['controller' => 'Categories', 
					'action' => 'view', $product->category->id]) ?></td>
				<td><?= h($product->description) ?></td>
				<td><?= h($product->price) ?></td>
				<td>
					<?= $this->Form->postLink('<span class="glyphicon glyphicon-plus"></span>', 
						['controller' => 'Cart', 'action' => 'add', $product->id ], 
						[
						    'escapeTitle' => false, 
						    'class' => "btn btn-small btn-success",
						    'title' => "add product to cart",
						]) 
					?>
				</td>
			</tr>
		<?php endforeach; ?>

	</tbody>

</table>
