<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\LocationGraph $locationGraph
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location Graph'), ['action' => 'edit', $locationGraph->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location Graph'), ['action' => 'delete', $locationGraph->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locationGraph->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Location Graph'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location Graph'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locationGraph view large-9 medium-8 columns content">
    <h3><?= h($locationGraph->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($locationGraph->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminal 1') ?></th>
            <td><?= $this->Number->format($locationGraph->terminal_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminal 2') ?></th>
            <td><?= $this->Number->format($locationGraph->terminal_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distance') ?></th>
            <td><?= $this->Number->format($locationGraph->distance) ?></td>
        </tr>
    </table>
</div>
