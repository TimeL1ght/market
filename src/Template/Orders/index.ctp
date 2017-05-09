<h1>Your Orders</h1>

<?php if ($orders->count() === 0): ?>

<p>No orders found</p>

<?php else: ?>

<?php foreach ($orders as $order): ?>
	<a href="<?= $this->Url->build(['controller' => 'Orders', 'action' => 'view', $order->id]) ?>">
		<h2>Order <?= $order->id ?> (<?= h($order->status) ?>)</h2>
	</a>
<?php endforeach; ?>

<?php endif; ?>