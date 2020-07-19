<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Moved $moved
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Moved'), ['action' => 'edit', $moved->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Moved'), ['action' => 'delete', $moved->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moved->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Moved'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Moved'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Booking Details'), ['controller' => 'BookingDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Booking Detail'), ['controller' => 'BookingDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="moved view large-9 medium-8 columns content">
    <h3><?= h($moved->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Booking Detail') ?></th>
            <td><?= $moved->has('booking_detail') ? $this->Html->link($moved->booking_detail->id, ['controller' => 'BookingDetails', 'action' => 'view', $moved->booking_detail->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($moved->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($moved->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Old Route Id') ?></th>
            <td><?= $this->Number->format($moved->old_route_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New Route Id') ?></th>
            <td><?= $this->Number->format($moved->new_route_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($moved->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($moved->modified) ?></td>
        </tr>
    </table>
</div>
