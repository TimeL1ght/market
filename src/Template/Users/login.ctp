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
	    </fieldset>
	<?= $this->Form->button(__('Login'), ['class' => 'btn btn-success']); ?>
	<?= $this->Form->end() ?>
</div>

No account yet? <?= $this->Html->link('Register', ['action' => 'register']) ?>


