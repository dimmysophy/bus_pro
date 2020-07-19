<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Bus[]|\Cake\Collection\CollectionInterface $bus
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bus'), ['action' => 'add']) ?></li>
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
<div class="bus index large-9 medium-8 columns content">
    <h3><?= __('Bus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bus_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bus_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amenities_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bus_reg_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max_seats') ?></th>
                <th scope="col"><?= $this->Paginator->sort('board_point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('board_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drop_point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drop_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bus_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bus as $bus): ?>
            <tr>
                <td><?= $this->Number->format($bus->id) ?></td>
                <td><?= h($bus->bus_name) ?></td>
                <td><?= $this->Number->format($bus->bus_type_id) ?></td>
                <td><?= $bus->has('amenity') ? $this->Html->link($bus->amenity->id, ['controller' => 'Amenities', 'action' => 'view', $bus->amenity->id]) : '' ?></td>
                <td><?= h($bus->bus_reg_no) ?></td>
                <td><?= $this->Number->format($bus->max_seats) ?></td>
                <td><?= h($bus->board_point) ?></td>
                <td><?= h($bus->board_time) ?></td>
                <td><?= h($bus->drop_point) ?></td>
                <td><?= h($bus->drop_time) ?></td>
                <td><?= $this->Number->format($bus->status) ?></td>
                <td><?= $this->Number->format($bus->bus_status) ?></td>
                <td><?= h($bus->created_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bus->id)]) ?>
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
