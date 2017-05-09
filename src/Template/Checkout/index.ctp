<h1>Checkout</h1>

<h2>Your order:</h2>

<?= $this->Html->link('Cancel', ['controller' => 'Cart'], ['escateTitle' => false, 'class' => 'btn btn-success']) ?>
<?= $this->Html->link('Submit', ['action' => 'submit'], ['escateTitle' => false, 'class' => 'btn btn-success pull-right']) ?>