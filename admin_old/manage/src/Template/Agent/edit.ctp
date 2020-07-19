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
                ['action' => 'delete', $agent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agent'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agent Terminal'), ['controller' => 'AgentTerminal', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agent form large-9 medium-8 columns content">
    <?= $this->Form->create($agent) ?>
    <fieldset>
        <legend><?= __('Edit Agent') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('password');
            echo $this->Form->control('company_name');
            echo $this->Form->control('address');
            echo $this->Form->control('email');
            echo $this->Form->control('phone_number');
            echo $this->Form->control('city');
            echo $this->Form->control('country');
            echo $this->Form->control('profile_picture');
            echo $this->Form->control('status');
            echo $this->Form->control('created_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
