<?php
/**
 * @var \App\View\AppView $this
 */
?>

<nav>
    <ul class="side-nav">
        <li class="heading"><?= __('akcje') ?></li>
        <li><?= $this->Html->link(__('List Notes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div>
    <?= $this->Form->create($note) ?>
    <fieldset>
        <legend><?= __('dodaj') ?></legend>
        <?php
        echo $this->Form->control('title', ['class' => 'form-control', 'label' => 'Tytuł']);
        echo $this->Form->control('description', ['id' => 'tresc', 'class' => 'form-control', 'label' => __('Opis')]);
        echo $this->Form->control('tags._ids', ['options' => $tags, 'class' => 'form-control', 'label' => 'Tagi']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Wyślij')) ?>
    <?= $this->Form->end() ?>
</div>
