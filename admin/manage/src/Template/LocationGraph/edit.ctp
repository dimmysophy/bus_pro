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
                ['action' => 'delete', $locationGraph->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $locationGraph->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Location Graph'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="locationGraph form large-9 medium-8 columns content">
    <?= $this->Form->create($locationGraph) ?>
    <fieldset>
        <legend><?= __('Edit Location Graph') ?></legend>
        <?php
            echo $this->Form->control('terminal_1');
            echo $this->Form->control('terminal_2');
            echo $this->Form->control('distance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
