<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $terminal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $terminal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bus Count'), ['controller' => 'BusCount', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bus Count'), ['controller' => 'BusCount', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bus State'), ['controller' => 'BusState', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bus State'), ['controller' => 'BusState', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Excess'), ['controller' => 'Excess', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exces'), ['controller' => 'Excess', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="terminals form large-9 medium-8 columns content">
    <?= $this->Form->create($terminal) ?>
    <fieldset>
        <legend><?= __('Edit Terminal') ?></legend>
        <?php
            echo $this->Form->control('street');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
