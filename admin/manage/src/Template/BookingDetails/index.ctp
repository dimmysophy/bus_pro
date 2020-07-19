<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\BookingDetail[]|\Cake\Collection\CollectionInterface $bookingDetails
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Booking Detail'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookingDetails index large-9 medium-8 columns content">
    <h3><?= __('Booking Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('booking_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bus_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rout_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('boarding_point_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seat_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_option') ?></th>
                <th scope="col"><?= $this->Paginator->sort('booking_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookingDetails as $bookingDetail): ?>
            <tr>
                <td><?= $this->Number->format($bookingDetail->id) ?></td>
                <td><?= h($bookingDetail->booking_id) ?></td>
                <td><?= h($bookingDetail->amount) ?></td>
                <td><?= $this->Number->format($bookingDetail->bus_id) ?></td>
                <td><?= $this->Number->format($bookingDetail->rout_id) ?></td>
                <td><?= $this->Number->format($bookingDetail->boarding_point_id) ?></td>
                <td><?= h($bookingDetail->user_id) ?></td>
                <td><?= h($bookingDetail->seat_no) ?></td>
                <td><?= h($bookingDetail->payment_status) ?></td>
                <td><?= h($bookingDetail->payment_option) ?></td>
                <td><?= h($bookingDetail->booking_date) ?></td>
                <td><?= h($bookingDetail->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bookingDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookingDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookingDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookingDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
