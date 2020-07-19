<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Location Graph'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="locationGraph form large-9 medium-8 columns content">
    <?= $this->Form->create($locationGraph) ?>
    <fieldset>
        <legend><?= __('Add Location Graph') ?></legend>
        <?php
            echo $this->Form->control('terminal_1', ['options' => $terminals]);
            echo $this->Form->control('terminal_2', ['options' => $terminals]);
            echo $this->Form->control('distance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
