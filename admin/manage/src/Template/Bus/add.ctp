<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Amenities'), ['controller' => 'Amenities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amenity'), ['controller' => 'Amenities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Board Points'), ['controller' => 'BoardPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Board Point'), ['controller' => 'BoardPoints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Book Bus'), ['controller' => 'BookBus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book Bus'), ['controller' => 'BookBus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Booking Details'), ['controller' => 'BookingDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Booking Detail'), ['controller' => 'BookingDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bus Gallery'), ['controller' => 'BusGallery', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bus Gallery'), ['controller' => 'BusGallery', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bus State'), ['controller' => 'BusState', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bus State'), ['controller' => 'BusState', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cancellation'), ['controller' => 'Cancellation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cancellation'), ['controller' => 'Cancellation', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drop Points'), ['controller' => 'DropPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drop Point'), ['controller' => 'DropPoints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rating'), ['controller' => 'Rating', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rating'), ['controller' => 'Rating', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Route'), ['controller' => 'Route', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Route'), ['controller' => 'Route', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seat Layout'), ['controller' => 'SeatLayout', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seat Layout'), ['controller' => 'SeatLayout', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bus form large-9 medium-8 columns content">
    <?= $this->Form->create($bus) ?>
    <fieldset>
        <legend><?= __('Add Bus') ?></legend>
        <?php
            echo $this->Form->control('bus_name');
            echo $this->Form->control('bus_type_id');
            echo $this->Form->control('amenities_id', ['options' => $amenities]);
            echo $this->Form->control('bus_reg_no');
            echo $this->Form->control('max_seats');
            echo $this->Form->control('board_point');
            echo $this->Form->control('board_time');
            echo $this->Form->control('drop_point');
            echo $this->Form->control('drop_time');
            echo $this->Form->control('status');
            echo $this->Form->control('bus_status');
            echo $this->Form->control('created_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
