<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Moved Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\BookingDetailsTable|\Cake\ORM\Association\BelongsTo $BookingDetails
 * @property \App\Model\Table\OldRoutesTable|\Cake\ORM\Association\BelongsTo $OldRoutes
 * @property \App\Model\Table\NewRoutesTable|\Cake\ORM\Association\BelongsTo $NewRoutes
 *
 * @method \App\Model\Entity\Moved get($primaryKey, $options = [])
 * @method \App\Model\Entity\Moved newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Moved[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moved|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moved patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Moved[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moved findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MovedTable extends Table
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

        $this->setTable('moved');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('User', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BookingDetails', [
            'foreignKey' => 'booking_detail_id',
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
        $rules->add($rules->existsIn(['user_id'], 'User'));
        $rules->add($rules->existsIn(['booking_detail_id'], 'BookingDetails'));


        return $rules;
    }
}
