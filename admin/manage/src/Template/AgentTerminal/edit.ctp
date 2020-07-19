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
                ['action' => 'delete', $agentTerminal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agentTerminal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agent Terminal'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agentTerminal form large-9 medium-8 columns content">
    <?= $this->Form->create($agentTerminal) ?>
    <fieldset>
        <legend><?= __('Edit Agent Terminal') ?></legend>
        <?php
            echo $this->Form->control('agent_id');
            echo $this->Form->control('terminal_id', ['options' => $terminals]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
