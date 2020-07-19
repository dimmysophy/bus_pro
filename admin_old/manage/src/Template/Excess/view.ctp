<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Exces $exces
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Exces'), ['action' => 'edit', $exces->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Exces'), ['action' => 'delete', $exces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exces->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Excess'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exces'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="excess view large-9 medium-8 columns content">
    <h3><?= h($exces->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Terminal') ?></th>
            <td><?= $exces->has('terminal') ? $this->Html->link($exces->terminal->id, ['controller' => 'Terminals', 'action' => 'view', $exces->terminal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($exces->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Of Excess Buses') ?></th>
            <td><?= $this->Number->format($exces->no_of_excess_buses) ?></td>
        </tr>
    </table>
</div>
