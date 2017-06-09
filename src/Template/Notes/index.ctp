<?php
/**
 * @var \App\View\AppView $this
 */
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= __('Akcje') ?>
        </div>
        <div class="panel-body">
            <?= $this->Html->link(__('New Note'), ['action' => 'add'], ['class' => 'btn btn-primary btn-xs']) ?>
            <?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'btn btn-primary btn-xs']) ?>
            <?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add'], ['class' => 'btn btn-primary btn-xs']) ?>
        </div>
    </div>
    <div>
<!--        <h3>--><?//= __('Notes') ?><!--</h3>-->
        <table class="table table-hover" cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($notes as $note): ?>
                <tr>
                    <td><?= $this->Number->format($note->id) ?></td>
                    <td><?= h($note->title) ?></td>
                    <td><?= h($note->created) ?></td>
                    <td><?= h($note->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $note->id], ['class' => 'btn btn-success btn-xs']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $note->id], ['class' => 'btn btn-warning btn-xs']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $note->id], ['confirm' => __('Are you sure you want to delete # {0}?', $note->id), 'class' => 'btn btn-danger btn-xs']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
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

