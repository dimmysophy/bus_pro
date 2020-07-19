<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BusState Entity
 *
 * @property int $id
 * @property int $bus_id
 * @property int $terminal_id
 * @property \Cake\I18n\FrozenTime $take_off_time
 * @property \Cake\I18n\FrozenTime $arrival_time
 * @property int $destination_terminal_id
 * @property string $state
 *
 * @property \App\Model\Entity\Bus $bus
 * @property \App\Model\Entity\Terminal $terminal
 * @property \App\Model\Entity\DestinationTerminal $destination_terminal
 */
class BusState extends Entity
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
