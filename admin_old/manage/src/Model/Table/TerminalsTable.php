<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Terminals Model
 *
 * @property \App\Model\Table\AgentTerminalTable|\Cake\ORM\Association\HasMany $AgentTerminal
 * @property \App\Model\Table\BusCountTable|\Cake\ORM\Association\HasMany $BusCount
 * @property \App\Model\Table\BusStateTable|\Cake\ORM\Association\HasMany $BusState
 * @property \App\Model\Table\ExcessTable|\Cake\ORM\Association\HasMany $Excess
 *
 * @method \App\Model\Entity\Terminal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Terminal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Terminal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Terminal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Terminal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Terminal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Terminal findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TerminalsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('terminals');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('AgentTerminal', [
            'foreignKey' => 'terminal_id'
        ]);
        $this->hasMany('BusCount', [
            'foreignKey' => 'terminal_id'
        ]);
        $this->hasMany('BusState', [
            'foreignKey' => 'terminal_id'
        ]);
        $this->hasMany('Excess', [
            'foreignKey' => 'terminal_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
