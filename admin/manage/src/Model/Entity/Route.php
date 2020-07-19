<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Route Entity
 *
 * @property int $id
 * @property int $bus_id
 * @property string $board_point
 * @property string $board_time
 * @property string $drop_point
 * @property string $drop_time
 * @property int $fare
 * @property int $status
 * @property string $created_by
 *
 * @property \App\Model\Entity\Bus $bus
 */
class Route extends Entity
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
