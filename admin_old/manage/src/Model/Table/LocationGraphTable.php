<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LocationGraph Model
 *
 * @method \App\Model\Entity\LocationGraph get($primaryKey, $options = [])
 * @method \App\Model\Entity\LocationGraph newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LocationGraph[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LocationGraph|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LocationGraph patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LocationGraph[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LocationGraph findOrCreate($search, callable $callback = null, $options = [])
 */
class LocationGraphTable extends Table
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

        $this->setTable('location_graph');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('terminal_1')
            ->requirePresence('terminal_1', 'create')
            ->notEmpty('terminal_1');

        $validator
            ->integer('terminal_2')
            ->requirePresence('terminal_2', 'create')
            ->notEmpty('terminal_2');

        $validator
            ->numeric('distance')
            ->requirePresence('distance', 'create')
            ->notEmpty('distance');

        return $validator;
    }
}
