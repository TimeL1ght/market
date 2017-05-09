<?= $this->Html->link('<i class="fa fa-shopping-bag"></i>', 
	['controller' => 'Products', 'action' => 'index'], 
	['class' => 'btn btn-large btn-info nav-button nav-products', 'escapeTitle' => false, 'title' => 'Go shopping']) ?>
<?= $this->Html->link('<i class="fa fa-shopping-cart"></i>', 
	['controller' => 'Cart', 'action' => 'index'], 
	['class' => 'btn btn-large btn-info nav-button nav-cart', 'escapeTitle' => false, 'title' => 'Your shopping cart']) ?>
<?= $this->Html->link('<i class="fa fa-user-o"></i>', 
	['controller' => 'Profile', 'action' => 'index'], 
	['class' => 'btn btn-large btn-info nav-button nav-profile', 'escapeTitle' => false, 'title' => 'Your profile']) ?>
<?= $this->Html->link('<i class="fa fa-list"></i>', 
	['controller' => 'Orders', 'action' => 'index'], 
	['class' => 'btn btn-large btn-info nav-button nav-orders', 'escapeTitle' => false, 'title' => 'Your orders']) ?>

<?= $this->Html->link('<i class="fa fa-sign-out"></i>', 
	['controller' => 'Users', 'action' => 'logout'], 
	['class' => 'btn btn-large btn-info nav-button nav-logout', 'escapeTitle' => false, 'title' => 'Logout']) ?>

<?php if (isset($isAdmin)): ?>
<?= $this->Html->link('<i class="fa fa-star-o"></i>', 
	['controller' => 'Admin', 'action' => 'index'], 
	['class' => 'btn btn-large btn-warning nav-button nav-admin', 'escapeTitle' => false, 'title' => 'Administration']) ?>
<?php endif; ?>