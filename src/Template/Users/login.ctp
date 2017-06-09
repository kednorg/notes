<div class="col-lg-3">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Proszę się zalogować') ?></legend>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'username']) ?>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'password']) ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>