<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bus State'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="busState form large-9 medium-8 columns content">
    <?= $this->Form->create($busState) ?>
    <fieldset>
        <legend><?= __('Add Bus State') ?></legend>
        <?php
            echo $this->Form->control('bus_id');
            echo $this->Form->control('terminal_id', ['options' => $terminals]);
            echo $this->Form->control('take_off_time');
            echo $this->Form->control('arrival_time', ['empty' => true]);
            echo $this->Form->control('destination_terminal_id');
            echo $this->Form->control('state');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
