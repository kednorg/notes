<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= __('akcje') ?>
    </div>
    <div class="panel-body">
        <?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id], ['class' => 'btn btn-primary btn-xs']) ?>
        <?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['class' => 'btn btn-primary btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
        <?= $this->Html->link(__('List Tags'), ['action' => 'index'], ['class' => 'btn btn-primary btn-xs']) ?>
        <?= $this->Html->link(__('New Tag'), ['action' => 'add'], ['class' => 'btn btn-primary btn-xs']) ?>
        <?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index'], ['class' => 'btn btn-primary btn-xs']) ?>
        <?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add'], ['class' => 'btn btn-primary btn-xs']) ?>
    </div>
</div>
<div>
    <h3><?= h($tag->title) ?></h3>
    <p><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['class' => 'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id], ['class' => 'btn btn-warning btn-xs']) ?>
    </p>

    <p>
        <?php if (!empty($tag->notes)): ?>
    </p>
    <?php foreach ($tag->notes as $notes): ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <h4>
                    <?= h($notes->title) ?>
                </h4>
                <p>
                    <?= ($notes->description) ?>

                    <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>
                </p>
            </div>
        </div>

    <?php endforeach; ?>
    <?php endif; ?>
</div>
