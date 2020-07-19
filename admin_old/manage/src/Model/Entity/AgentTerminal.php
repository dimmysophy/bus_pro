<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AgentTerminal Entity
 *
 * @property int $id
 * @property int $agent_id
 * @property int $terminal_id
 *
 * @property \App\Model\Entity\Agent $agent
 * @property \App\Model\Entity\Terminal $terminal
 */
class AgentTerminal extends Entity
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
