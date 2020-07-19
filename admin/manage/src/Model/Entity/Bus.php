<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bus Entity
 *
 * @property int $id
 * @property string $bus_name
 * @property int $bus_type_id
 * @property string $amenities_id
 * @property string $bus_reg_no
 * @property int $max_seats
 * @property string $board_point
 * @property string $board_time
 * @property string $drop_point
 * @property string $drop_time
 * @property int $status
 * @property int $bus_status
 * @property string $created_by
 *
 * @property \App\Model\Entity\BusType $bus_type
 * @property \App\Model\Entity\Amenity $amenity
 * @property \App\Model\Entity\BoardPoint[] $board_points
 * @property \App\Model\Entity\BookBus[] $book_bus
 * @property \App\Model\Entity\BookingDetail[] $booking_details
 * @property \App\Model\Entity\BusGallery[] $bus_gallery
 * @property \App\Model\Entity\BusState[] $bus_state
 * @property \App\Model\Entity\Cancellation[] $cancellation
 * @property \App\Model\Entity\DropPoint[] $drop_points
 * @property \App\Model\Entity\Rating[] $rating
 * @property \App\Model\Entity\Route[] $route
 * @property \App\Model\Entity\SeatLayout[] $seat_layout
 */
class Bus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
