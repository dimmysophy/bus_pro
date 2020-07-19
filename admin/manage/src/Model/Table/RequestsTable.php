<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requests Model
 *
 * @method \App\Model\Entity\Request get($primaryKey, $options = [])
 * @method \App\Model\Entity\Request newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Request[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Request|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Request[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Request findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RequestsTable extends Table
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

        $this->setTable('requests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
		$this->belongsTo('Terminals', [
            'foreignKey' => 'requesting_terminal',
            'joinType' => 'INNER'
        ]);
		
		$this->belongsTo('Terminals', [
            'foreignKey' => 'terminal_from',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Timestamp');
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
            ->integer('requesting_terminal')
            ->requirePresence('requesting_terminal', 'create')
            ->notEmpty('requesting_terminal');

        $validator
            ->integer('terminal_from')
            ->requirePresence('terminal_from', 'create')
            ->notEmpty('terminal_from');

        $validator
            ->integer('number_needed')
            ->requirePresence('number_needed', 'create')
            ->notEmpty('number_needed');

        $validator
            ->requirePresence('serviced', 'create')
            ->notEmpty('serviced');

        $validator
            ->requirePresence('cancelled', 'create')
            ->notEmpty('cancelled');

        return $validator;
    }
}
