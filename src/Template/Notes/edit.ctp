<?php
/**
 * @var \App\View\AppView $this
 */
?>

<nav>
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $note->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Notes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div>
    <?= $this->Form->create($note) ?>
    <fieldset>
        <legend><?= __('Edycja') ?></legend>
        <?php
        echo $this->Form->control('title', ['class' => 'form-control', 'label' => 'Tytuł']);
        echo $this->Form->control('description', ['id' => 'tresc', 'label' => __('Opis')], ['escape' => 'false']);
        echo $this->Form->control('tags._ids', ['options' => $tags, 'class' => 'form-control', 'label' => 'Tagi']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Wyślij')) ?>
    <?= $this->Form->end() ?>
</div>
