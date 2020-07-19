<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Excess'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="excess form large-9 medium-8 columns content">
    <?= $this->Form->create($exces) ?>
    <fieldset>
        <legend><?= __('Add Exces') ?></legend>
        <?php
            echo $this->Form->control('terminal_id', ['options' => $terminals]);
            echo $this->Form->control('no_of_excess_buses');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
