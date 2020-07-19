<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Route Model
 *
 * @property \App\Model\Table\BusTable|\Cake\ORM\Association\BelongsTo $Bus
 *
 * @method \App\Model\Entity\Route get($primaryKey, $options = [])
 * @method \App\Model\Entity\Route newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Route[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Route|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Route patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Route[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Route findOrCreate($search, callable $callback = null, $options = [])
 */
class RouteTable extends Table
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

        $this->setTable('route');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Bus', [
            'foreignKey' => 'bus_id',
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
            ->requirePresence('board_point', 'create')
            ->notEmpty('board_point');

        $validator
            ->requirePresence('board_time', 'create')
            ->notEmpty('board_time');

        $validator
            ->requirePresence('drop_point', 'create')
            ->notEmpty('drop_point');

        $validator
            ->requirePresence('drop_time', 'create')
            ->notEmpty('drop_time');

        $validator
            ->integer('fare')
            ->requirePresence('fare', 'create')
            ->notEmpty('fare');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

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

        return $rules;
    }
}
