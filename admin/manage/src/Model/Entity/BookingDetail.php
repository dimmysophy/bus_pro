<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BookingDetail Entity
 *
 * @property int $id
 * @property string $booking_id
 * @property string $amount
 * @property int $bus_id
 * @property int $rout_id
 * @property int $boarding_point_id
 * @property string $user_id
 * @property string $seat_no
 * @property string $payment_status
 * @property string $payment_option
 * @property string $booking_date
 * @property string $status
 *
 * @property \App\Model\Entity\Booking $booking
 * @property \App\Model\Entity\Bus $bus
 * @property \App\Model\Entity\Rout $rout
 * @property \App\Model\Entity\BoardingPoint $boarding_point
 * @property \App\Model\Entity\User $user
 */
class BookingDetail extends Entity
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
