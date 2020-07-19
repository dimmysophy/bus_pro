<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BusState[]|\Cake\Collection\CollectionInterface $busState
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bus State'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="busState index large-9 medium-8 columns content">
    <h3><?= __('Bus State') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bus_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('take_off_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arrival_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destination_terminal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($busState as $busState): ?>
            <tr>
                <td><?= $this->Number->format($busState->id) ?></td>
                <td><?= $this->Number->format($busState->bus_id) ?></td>
                <td><?= $busState->has('terminal') ? $this->Html->link($busState->terminal->id, ['controller' => 'Terminals', 'action' => 'view', $busState->terminal->id]) : '' ?></td>
                <td><?= h($busState->take_off_time) ?></td>
                <td><?= h($busState->arrival_time) ?></td>
                <td><?= $this->Number->format($busState->destination_terminal_id) ?></td>
                <td><?= h($busState->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $busState->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $busState->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $busState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busState->id)]) ?>
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
