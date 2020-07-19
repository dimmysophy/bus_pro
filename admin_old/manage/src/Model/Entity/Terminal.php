<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Terminal Entity
 *
 * @property int $id
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\AgentTerminal[] $agent_terminal
 * @property \App\Model\Entity\BusCount[] $bus_count
 * @property \App\Model\Entity\BusState[] $bus_state
 * @property \App\Model\Entity\Exces[] $excess
 */
class Terminal extends Entity
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
