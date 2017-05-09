<div class="well">
	<?php if (isset($errorExist)): ?>
		<div class="alert alert-danger">
			<?= $this->Flash->render() ?>
		</div>
	<?php endif; ?>
	<?= $this->Form->create() ?>
	    <fieldset>
	        <?= $this->Form->control('username', ['class' => 'form-control']) ?>
	        <?= $this->Form->control('password', ['class' => 'form-control']) ?>
	        <?= $this->Form->control('confirm_password', ['type' => 'password', 'class' => 'form-control']) ?>
	    </fieldset>
	<?= $this->Form->button(__('Register'), ['class' => 'btn btn-success']); ?>
	<?= $this->Form->end() ?>
</div>

Already have an account? <?= $this->Html->link('Login', ['action' => 'login']) ?>