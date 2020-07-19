<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Moved Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $booking_detail_id
 * @property int $old_route_id
 * @property int $new_route_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\BookingDetail $booking_detail
 * @property \App\Model\Entity\OldRoute $old_route
 * @property \App\Model\Entity\NewRoute $new_route
 */
class Moved extends Entity
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
