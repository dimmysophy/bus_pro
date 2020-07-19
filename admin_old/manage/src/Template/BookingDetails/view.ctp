<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BookingDetail $bookingDetail
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Booking Detail'), ['action' => 'edit', $bookingDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Booking Detail'), ['action' => 'delete', $bookingDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookingDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Booking Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Booking Detail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookingDetails view large-9 medium-8 columns content">
    <h3><?= h($bookingDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Booking Id') ?></th>
            <td><?= h($bookingDetail->booking_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= h($bookingDetail->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= h($bookingDetail->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seat No') ?></th>
            <td><?= h($bookingDetail->seat_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= h($bookingDetail->payment_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Option') ?></th>
            <td><?= h($bookingDetail->payment_option) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Booking Date') ?></th>
            <td><?= h($bookingDetail->booking_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($bookingDetail->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookingDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bus Id') ?></th>
            <td><?= $this->Number->format($bookingDetail->bus_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rout Id') ?></th>
            <td><?= $this->Number->format($bookingDetail->rout_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Boarding Point Id') ?></th>
            <td><?= $this->Number->format($bookingDetail->boarding_point_id) ?></td>
        </tr>
    </table>
</div>
