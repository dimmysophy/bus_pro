<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Booking Details'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bookingDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($bookingDetail) ?>
    <fieldset>
        <legend><?= __('Add Booking Detail') ?></legend>
        <?php
            echo $this->Form->control('booking_id');
            echo $this->Form->control('amount');
            echo $this->Form->control('bus_id');
            echo $this->Form->control('rout_id');
            echo $this->Form->control('boarding_point_id');
            echo $this->Form->control('user_id');
            echo $this->Form->control('seat_no');
            echo $this->Form->control('payment_status');
            echo $this->Form->control('payment_option');
            echo $this->Form->control('booking_date');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
