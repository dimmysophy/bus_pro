<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agent Entity
 *
 * @property int $id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $password
 * @property string $company_name
 * @property string $address
 * @property string $email
 * @property string $phone_number
 * @property string $city
 * @property string $country
 * @property string $profile_picture
 * @property string $status
 * @property string $created_by
 *
 * @property \App\Model\Entity\AgentTerminal[] $agent_terminal
 */
class Agent extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
