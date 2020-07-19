<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\AgentTerminal $agentTerminal
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agent Terminal'), ['action' => 'edit', $agentTerminal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agent Terminal'), ['action' => 'delete', $agentTerminal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agentTerminal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agent Terminal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agent Terminal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agentTerminal view large-9 medium-8 columns content">
    <h3><?= h($agentTerminal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Terminal') ?></th>
            <td><?= $agentTerminal->has('terminal') ? $this->Html->link($agentTerminal->terminal->id, ['controller' => 'Terminals', 'action' => 'view', $agentTerminal->terminal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agentTerminal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agent Id') ?></th>
            <td><?= $this->Number->format($agentTerminal->agent_id) ?></td>
        </tr>
    </table>
</div>
