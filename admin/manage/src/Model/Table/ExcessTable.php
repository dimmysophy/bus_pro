<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Excess Model
 *
 * @property \App\Model\Table\TerminalsTable|\Cake\ORM\Association\BelongsTo $Terminals
 *
 * @method \App\Model\Entity\Exces get($primaryKey, $options = [])
 * @method \App\Model\Entity\Exces newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Exces[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Exces|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Exces patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Exces[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Exces findOrCreate($search, callable $callback = null, $options = [])
 */
class ExcessTable extends Table
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

        $this->setTable('excess');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->integer('no_of_excess_buses')
            ->requirePresence('no_of_excess_buses', 'create')
            ->notEmpty('no_of_excess_buses');

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
        $rules->add($rules->existsIn(['terminal_id'], 'Terminals'));

        return $rules;
    }
}
