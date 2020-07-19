<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BusState $busState
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bus State'), ['action' => 'edit', $busState->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bus State'), ['action' => 'delete', $busState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busState->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bus State'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus State'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="busState view large-9 medium-8 columns content">
    <h3><?= h($busState->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Terminal') ?></th>
            <td><?= $busState->has('terminal') ? $this->Html->link($busState->terminal->id, ['controller' => 'Terminals', 'action' => 'view', $busState->terminal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($busState->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($busState->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bus Id') ?></th>
            <td><?= $this->Number->format($busState->bus_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination Terminal Id') ?></th>
            <td><?= $this->Number->format($busState->destination_terminal_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Take Off Time') ?></th>
            <td><?= h($busState->take_off_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arrival Time') ?></th>
            <td><?= h($busState->arrival_time) ?></td>
        </tr>
    </table>
</div>
