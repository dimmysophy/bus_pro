<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusState Model
 *
 * @property \App\Model\Table\BusesTable|\Cake\ORM\Association\BelongsTo $Buses
 * @property \App\Model\Table\TerminalsTable|\Cake\ORM\Association\BelongsTo $Terminals
 * @property \App\Model\Table\DestinationTerminalsTable|\Cake\ORM\Association\BelongsTo $DestinationTerminals
 *
 * @method \App\Model\Entity\BusState get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusState newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusState[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusState|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusState[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusState findOrCreate($search, callable $callback = null, $options = [])
 */
class BusStateTable extends Table
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

        $this->setTable('bus_state');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Bus', [
            'foreignKey' => 'bus_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Terminals', [
            'foreignKey' => 'terminal_id',
            'joinType' => 'INNER'
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
            ->dateTime('take_off_time')
            ->requirePresence('take_off_time', 'create')
            ->notEmpty('take_off_time');

        $validator
            ->dateTime('arrival_time')
            ->allowEmpty('arrival_time');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['bus_id'], 'Bus'));
        $rules->add($rules->existsIn(['terminal_id'], 'Terminals'));
       

        return $rules;
    }
}
