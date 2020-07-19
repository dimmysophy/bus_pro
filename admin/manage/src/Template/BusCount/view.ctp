<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BusCount $busCount
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bus Count'), ['action' => 'edit', $busCount->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bus Count'), ['action' => 'delete', $busCount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busCount->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bus Count'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus Count'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="busCount view large-9 medium-8 columns content">
    <h3><?= h($busCount->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Terminal') ?></th>
            <td><?= $busCount->has('terminal') ? $this->Html->link($busCount->terminal->id, ['controller' => 'Terminals', 'action' => 'view', $busCount->terminal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($busCount->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Of Buses') ?></th>
            <td><?= $this->Number->format($busCount->no_of_buses) ?></td>
        </tr>
    </table>
</div>
