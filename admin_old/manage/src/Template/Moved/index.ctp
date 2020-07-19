<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Moved[]|\Cake\Collection\CollectionInterface $moved
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Moved'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Booking Details'), ['controller' => 'BookingDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Booking Detail'), ['controller' => 'BookingDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="moved index large-9 medium-8 columns content">
    <h3><?= __('Moved') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('booking_detail_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('old_route_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('new_route_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($moved as $moved): ?>
            <tr>
                <td><?= $this->Number->format($moved->id) ?></td>
                <td><?= $this->Number->format($moved->user_id) ?></td>
                <td><?= $moved->has('booking_detail') ? $this->Html->link($moved->booking_detail->id, ['controller' => 'BookingDetails', 'action' => 'view', $moved->booking_detail->id]) : '' ?></td>
                <td><?= $this->Number->format($moved->old_route_id) ?></td>
                <td><?= $this->Number->format($moved->new_route_id) ?></td>
                <td><?= h($moved->created) ?></td>
                <td><?= h($moved->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $moved->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moved->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moved->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moved->id)]) ?>
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
