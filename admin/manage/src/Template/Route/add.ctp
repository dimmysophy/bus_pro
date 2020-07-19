<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Route'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bus'), ['controller' => 'Bus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bus'), ['controller' => 'Bus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="route form large-9 medium-8 columns content">
    <?= $this->Form->create($route) ?>
    <fieldset>
        <legend><?= __('Add Route') ?></legend>
        <?php
            echo $this->Form->control('bus_id', ['options' => $bus]);
            echo $this->Form->control('board_point');
            echo $this->Form->control('board_time');
            echo $this->Form->control('drop_point');
            echo $this->Form->control('drop_time');
            echo $this->Form->control('fare');
            echo $this->Form->control('status');
            echo $this->Form->control('created_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
