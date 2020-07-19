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
                ['action' => 'delete', $moved->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $moved->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Moved'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Booking Details'), ['controller' => 'BookingDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Booking Detail'), ['controller' => 'BookingDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="moved form large-9 medium-8 columns content">
    <?= $this->Form->create($moved) ?>
    <fieldset>
        <legend><?= __('Edit Moved') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('booking_detail_id', ['options' => $bookingDetails]);
            echo $this->Form->control('old_route_id');
            echo $this->Form->control('new_route_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
