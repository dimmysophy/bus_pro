<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Exces[]|\Cake\Collection\CollectionInterface $excess
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exces'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="excess index large-9 medium-8 columns content">
    <h3><?= __('Excess') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('no_of_excess_buses') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($excess as $exces): ?>
            <tr>
                <td><?= $this->Number->format($exces->id) ?></td>
                <td><?= $exces->has('terminal') ? $this->Html->link($exces->terminal->id, ['controller' => 'Terminals', 'action' => 'view', $exces->terminal->id]) : '' ?></td>
                <td><?= $this->Number->format($exces->no_of_excess_buses) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $exces->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exces->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exces->id)]) ?>
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
