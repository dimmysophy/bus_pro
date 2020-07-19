<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Route $route
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Route'), ['action' => 'edit', $route->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Route'), ['action' => 'delete', $route->id], ['confirm' => __('Are you sure you want to delete # {0}?', $route->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Route'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Route'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bus'), ['controller' => 'Bus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus'), ['controller' => 'Bus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="route view large-9 medium-8 columns content">
    <h3><?= h($route->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bus') ?></th>
            <td><?= $route->has('bus') ? $this->Html->link($route->bus->id, ['controller' => 'Bus', 'action' => 'view', $route->bus->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Board Point') ?></th>
            <td><?= h($route->board_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Board Time') ?></th>
            <td><?= h($route->board_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drop Point') ?></th>
            <td><?= h($route->drop_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drop Time') ?></th>
            <td><?= h($route->drop_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($route->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($route->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fare') ?></th>
            <td><?= $this->Number->format($route->fare) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($route->status) ?></td>
        </tr>
    </table>
</div>
