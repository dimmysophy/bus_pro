<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AgentTerminal Model
 *
 * @property \App\Model\Table\AgentsTable|\Cake\ORM\Association\BelongsTo $Agents
 * @property \App\Model\Table\TerminalsTable|\Cake\ORM\Association\BelongsTo $Terminals
 *
 * @method \App\Model\Entity\AgentTerminal get($primaryKey, $options = [])
 * @method \App\Model\Entity\AgentTerminal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AgentTerminal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AgentTerminal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgentTerminal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AgentTerminal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AgentTerminal findOrCreate($search, callable $callback = null, $options = [])
 */
class AgentTerminalTable extends Table
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

        $this->setTable('agent_terminal');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Agent', [
            'foreignKey' => 'agent_id',
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
        $rules->add($rules->existsIn(['agent_id'], 'Agents'));
        $rules->add($rules->existsIn(['terminal_id'], 'Terminals'));

        return $rules;
    }
}
