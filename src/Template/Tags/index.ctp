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
        <?= $this->Html->link(__('New Tag'), ['action' => 'add'], ['class' => 'btn btn-primary btn-xs']) ?>
        <?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index'], ['class' => 'btn btn-primary btn-xs']) ?>
        <?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add'], ['class' => 'btn btn-primary btn-xs']) ?>
    </div>
</div>
<div>
    <h3><?= __('Tagi') ?></h3>


    <?php foreach ($tags as $tag): ?>
        <?= $this->Html->link($tag->title, ['action' => 'view', $tag->id], ['class' => 'badge']) ?>
    <?php endforeach; ?>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
