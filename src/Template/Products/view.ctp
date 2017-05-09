<h1>Product <?= $product->id ?></h1>

<div class="panel panel-default">
	
	<div class="panel-heading">
		<?= h($product->title) ?>
	</div>

	<div class="panel-body">
		<?= h($product->description) ?>
		<?= h($product->category->name) ?>
	</div>

</div>

<button class="btn btn-success">Buy</button>
