<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Bus $bus
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bus'), ['action' => 'edit', $bus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bus'), ['action' => 'delete', $bus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Amenities'), ['controller' => 'Amenities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amenity'), ['controller' => 'Amenities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Board Points'), ['controller' => 'BoardPoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Board Point'), ['controller' => 'BoardPoints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Book Bus'), ['controller' => 'BookBus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book Bus'), ['controller' => 'BookBus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Booking Details'), ['controller' => 'BookingDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Booking Detail'), ['controller' => 'BookingDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bus Gallery'), ['controller' => 'BusGallery', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus Gallery'), ['controller' => 'BusGallery', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bus State'), ['controller' => 'BusState', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bus State'), ['controller' => 'BusState', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cancellation'), ['controller' => 'Cancellation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cancellation'), ['controller' => 'Cancellation', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drop Points'), ['controller' => 'DropPoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drop Point'), ['controller' => 'DropPoints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rating'), ['controller' => 'Rating', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rating'), ['controller' => 'Rating', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Route'), ['controller' => 'Route', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Route'), ['controller' => 'Route', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seat Layout'), ['controller' => 'SeatLayout', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seat Layout'), ['controller' => 'SeatLayout', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bus view large-9 medium-8 columns content">
    <h3><?= h($bus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bus Name') ?></th>
            <td><?= h($bus->bus_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amenity') ?></th>
            <td><?= $bus->has('amenity') ? $this->Html->link($bus->amenity->id, ['controller' => 'Amenities', 'action' => 'view', $bus->amenity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bus Reg No') ?></th>
            <td><?= h($bus->bus_reg_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Board Point') ?></th>
            <td><?= h($bus->board_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Board Time') ?></th>
            <td><?= h($bus->board_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drop Point') ?></th>
            <td><?= h($bus->drop_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drop Time') ?></th>
            <td><?= h($bus->drop_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($bus->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bus Type Id') ?></th>
            <td><?= $this->Number->format($bus->bus_type_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Seats') ?></th>
            <td><?= $this->Number->format($bus->max_seats) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($bus->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bus Status') ?></th>
            <td><?= $this->Number->format($bus->bus_status) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Board Points') ?></h4>
        <?php if (!empty($bus->board_points)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Board Point') ?></th>
                <th scope="col"><?= __('Pickup Point') ?></th>
                <th scope="col"><?= __('Pickup Time') ?></th>
                <th scope="col"><?= __('Landmark') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->board_points as $boardPoints): ?>
            <tr>
                <td><?= h($boardPoints->id) ?></td>
                <td><?= h($boardPoints->bus_id) ?></td>
                <td><?= h($boardPoints->board_point) ?></td>
                <td><?= h($boardPoints->pickup_point) ?></td>
                <td><?= h($boardPoints->pickup_time) ?></td>
                <td><?= h($boardPoints->landmark) ?></td>
                <td><?= h($boardPoints->address) ?></td>
                <td><?= h($boardPoints->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BoardPoints', 'action' => 'view', $boardPoints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BoardPoints', 'action' => 'edit', $boardPoints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BoardPoints', 'action' => 'delete', $boardPoints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boardPoints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Book Bus') ?></h4>
        <?php if (!empty($bus->book_bus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Book Date') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->book_bus as $bookBus): ?>
            <tr>
                <td><?= h($bookBus->id) ?></td>
                <td><?= h($bookBus->bus_id) ?></td>
                <td><?= h($bookBus->user_id) ?></td>
                <td><?= h($bookBus->book_date) ?></td>
                <td><?= h($bookBus->amount) ?></td>
                <td><?= h($bookBus->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BookBus', 'action' => 'view', $bookBus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BookBus', 'action' => 'edit', $bookBus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BookBus', 'action' => 'delete', $bookBus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookBus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Booking Details') ?></h4>
        <?php if (!empty($bus->booking_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Booking Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Rout Id') ?></th>
                <th scope="col"><?= __('Boarding Point Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Seat No') ?></th>
                <th scope="col"><?= __('Payment Status') ?></th>
                <th scope="col"><?= __('Payment Option') ?></th>
                <th scope="col"><?= __('Booking Date') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->booking_details as $bookingDetails): ?>
            <tr>
                <td><?= h($bookingDetails->id) ?></td>
                <td><?= h($bookingDetails->booking_id) ?></td>
                <td><?= h($bookingDetails->amount) ?></td>
                <td><?= h($bookingDetails->bus_id) ?></td>
                <td><?= h($bookingDetails->rout_id) ?></td>
                <td><?= h($bookingDetails->boarding_point_id) ?></td>
                <td><?= h($bookingDetails->user_id) ?></td>
                <td><?= h($bookingDetails->seat_no) ?></td>
                <td><?= h($bookingDetails->payment_status) ?></td>
                <td><?= h($bookingDetails->payment_option) ?></td>
                <td><?= h($bookingDetails->booking_date) ?></td>
                <td><?= h($bookingDetails->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BookingDetails', 'action' => 'view', $bookingDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BookingDetails', 'action' => 'edit', $bookingDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BookingDetails', 'action' => 'delete', $bookingDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookingDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bus Gallery') ?></h4>
        <?php if (!empty($bus->bus_gallery)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->bus_gallery as $busGallery): ?>
            <tr>
                <td><?= h($busGallery->id) ?></td>
                <td><?= h($busGallery->image) ?></td>
                <td><?= h($busGallery->user_id) ?></td>
                <td><?= h($busGallery->bus_id) ?></td>
                <td><?= h($busGallery->created_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BusGallery', 'action' => 'view', $busGallery->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BusGallery', 'action' => 'edit', $busGallery->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BusGallery', 'action' => 'delete', $busGallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busGallery->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bus State') ?></h4>
        <?php if (!empty($bus->bus_state)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Terminal Id') ?></th>
                <th scope="col"><?= __('Take Off Time') ?></th>
                <th scope="col"><?= __('Arrival Time') ?></th>
                <th scope="col"><?= __('Destination Terminal Id') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->bus_state as $busState): ?>
            <tr>
                <td><?= h($busState->id) ?></td>
                <td><?= h($busState->bus_id) ?></td>
                <td><?= h($busState->terminal_id) ?></td>
                <td><?= h($busState->take_off_time) ?></td>
                <td><?= h($busState->arrival_time) ?></td>
                <td><?= h($busState->destination_terminal_id) ?></td>
                <td><?= h($busState->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BusState', 'action' => 'view', $busState->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BusState', 'action' => 'edit', $busState->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BusState', 'action' => 'delete', $busState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busState->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cancellation') ?></h4>
        <?php if (!empty($bus->cancellation)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Advertisement Status') ?></th>
                <th scope="col"><?= __('Cancel Time') ?></th>
                <th scope="col"><?= __('Percentage') ?></th>
                <th scope="col"><?= __('Flat') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->cancellation as $cancellation): ?>
            <tr>
                <td><?= h($cancellation->id) ?></td>
                <td><?= h($cancellation->bus_id) ?></td>
                <td><?= h($cancellation->advertisement_status) ?></td>
                <td><?= h($cancellation->cancel_time) ?></td>
                <td><?= h($cancellation->percentage) ?></td>
                <td><?= h($cancellation->flat) ?></td>
                <td><?= h($cancellation->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cancellation', 'action' => 'view', $cancellation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cancellation', 'action' => 'edit', $cancellation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cancellation', 'action' => 'delete', $cancellation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cancellation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Drop Points') ?></h4>
        <?php if (!empty($bus->drop_points)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Drop Point') ?></th>
                <th scope="col"><?= __('Stoping Point') ?></th>
                <th scope="col"><?= __('Drop Time') ?></th>
                <th scope="col"><?= __('Landmark') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->drop_points as $dropPoints): ?>
            <tr>
                <td><?= h($dropPoints->id) ?></td>
                <td><?= h($dropPoints->bus_id) ?></td>
                <td><?= h($dropPoints->drop_point) ?></td>
                <td><?= h($dropPoints->stoping_point) ?></td>
                <td><?= h($dropPoints->drop_time) ?></td>
                <td><?= h($dropPoints->landmark) ?></td>
                <td><?= h($dropPoints->address) ?></td>
                <td><?= h($dropPoints->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DropPoints', 'action' => 'view', $dropPoints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DropPoints', 'action' => 'edit', $dropPoints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DropPoints', 'action' => 'delete', $dropPoints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dropPoints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Rating') ?></h4>
        <?php if (!empty($bus->rating)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Bus Quality') ?></th>
                <th scope="col"><?= __('Punctuality') ?></th>
                <th scope="col"><?= __('Staff Behaviour') ?></th>
                <th scope="col"><?= __('Average') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->rating as $rating): ?>
            <tr>
                <td><?= h($rating->id) ?></td>
                <td><?= h($rating->user_id) ?></td>
                <td><?= h($rating->bus_id) ?></td>
                <td><?= h($rating->bus_quality) ?></td>
                <td><?= h($rating->punctuality) ?></td>
                <td><?= h($rating->Staff_behaviour) ?></td>
                <td><?= h($rating->average) ?></td>
                <td><?= h($rating->comments) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rating', 'action' => 'view', $rating->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rating', 'action' => 'edit', $rating->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rating', 'action' => 'delete', $rating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rating->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Route') ?></h4>
        <?php if (!empty($bus->route)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Board Point') ?></th>
                <th scope="col"><?= __('Board Time') ?></th>
                <th scope="col"><?= __('Drop Point') ?></th>
                <th scope="col"><?= __('Drop Time') ?></th>
                <th scope="col"><?= __('Fare') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->route as $route): ?>
            <tr>
                <td><?= h($route->id) ?></td>
                <td><?= h($route->bus_id) ?></td>
                <td><?= h($route->board_point) ?></td>
                <td><?= h($route->board_time) ?></td>
                <td><?= h($route->drop_point) ?></td>
                <td><?= h($route->drop_time) ?></td>
                <td><?= h($route->fare) ?></td>
                <td><?= h($route->status) ?></td>
                <td><?= h($route->created_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Route', 'action' => 'view', $route->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Route', 'action' => 'edit', $route->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Route', 'action' => 'delete', $route->id], ['confirm' => __('Are you sure you want to delete # {0}?', $route->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Seat Layout') ?></h4>
        <?php if (!empty($bus->seat_layout)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bus Id') ?></th>
                <th scope="col"><?= __('Bus Type') ?></th>
                <th scope="col"><?= __('Totel Seat') ?></th>
                <th scope="col"><?= __('Layout') ?></th>
                <th scope="col"><?= __('Layout Type') ?></th>
                <th scope="col"><?= __('Last Seat') ?></th>
                <th scope="col"><?= __('No Sleeper') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bus->seat_layout as $seatLayout): ?>
            <tr>
                <td><?= h($seatLayout->id) ?></td>
                <td><?= h($seatLayout->bus_id) ?></td>
                <td><?= h($seatLayout->bus_type) ?></td>
                <td><?= h($seatLayout->totel_seat) ?></td>
                <td><?= h($seatLayout->layout) ?></td>
                <td><?= h($seatLayout->layout_type) ?></td>
                <td><?= h($seatLayout->last_seat) ?></td>
                <td><?= h($seatLayout->no_sleeper) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SeatLayout', 'action' => 'view', $seatLayout->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SeatLayout', 'action' => 'edit', $seatLayout->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SeatLayout', 'action' => 'delete', $seatLayout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seatLayout->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
