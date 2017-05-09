<h1>Your Cart</h1>

<?php if ($ordersProducts->count() === 0): ?>

<p>Your cart is empty</p>

<?php else: ?>

<table class="table table-bordered">
	<thead>
		<?= $this->Html->tableHeaders(['Category', 'Title', 'Description', 'Quantity', 'Total Price', '']) ?>
		</thead>
	<tbody>
	<?php
		$totalCost = 0;
	?>
	<?php foreach($ordersProducts as $item): ?>
	<tr>
		<td><?= h($item->product->category->name) ?></td>
		<td><?= h($item->product->title) ?></td>
		<td><?= h($item->product->description) ?></td>
		<td><?= $item->quantity ?></td>

		<?php
			$lineCost = $item->product->price * $item->quantity;
			$totalCost += $lineCost;
		?>

		<td><?= $lineCost ?></td>	
		<td>
			<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', 
				['action' => 'delete', $item->id], 
				[
				    'escapeTitle' => false, 
				    'confirm' => 'Are you sure?', 
				    'class' => "btn btn-small btn-danger",
				    'title' => "remove product from cart",
				]) 
			?>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan=4><strong>Total cost</strong></td>
		<td><strong><?= $totalCost ?></strong></td>
		<td></td>
	</tr>
	</tbody>
</table>

<?= $this->Html->link('<span class="glyphicon glyphicon-ok">&nbsp;Checkout</span>', 
	['controller' => 'Checkout'], ['escapeTitle' => false, 'class' => 'btn btn-warning']) ?>

<p style="margin-top: 50px;"></p>

<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove">&nbsp;Clear Cart</span>', 
	['controller' => 'Cart', 'action' => 'clear'], 
	[
	    'escapeTitle' => false, 
	    'confirm' => 'Are you sure?', 
	    'class' => "btn btn-small btn-danger",
	]) 
?>

<?php endif; ?>