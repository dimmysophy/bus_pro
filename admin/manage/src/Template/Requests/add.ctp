<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="requests form large-9 medium-8 columns content">
    <?= $this->Form->create($request) ?>
    <fieldset>
        <legend><?= __('Add Request') ?></legend>
        <?php
            echo $this->Form->control('requesting_terminal');
            echo $this->Form->control('terminal_from');
            echo $this->Form->control('number_needed');
            echo $this->Form->control('serviced');
            echo $this->Form->control('cancelled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
