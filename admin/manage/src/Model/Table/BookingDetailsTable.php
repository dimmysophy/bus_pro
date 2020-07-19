<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BookingDetails Model
 *
 * @property \App\Model\Table\BookingsTable|\Cake\ORM\Association\BelongsTo $Bookings
 * @property \App\Model\Table\BusesTable|\Cake\ORM\Association\BelongsTo $Buses
 * @property \App\Model\Table\RoutsTable|\Cake\ORM\Association\BelongsTo $Routs
 * @property \App\Model\Table\BoardingPointsTable|\Cake\ORM\Association\BelongsTo $BoardingPoints
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\BookingDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\BookingDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BookingDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BookingDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BookingDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BookingDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BookingDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class BookingDetailsTable extends Table
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

        $this->setTable('booking_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');


        $this->belongsTo('Bus', [
            'foreignKey' => 'bus_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Route', [
            'foreignKey' => 'rout_id',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('User', [
            'foreignKey' => 'user_id',
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
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        $validator
            ->requirePresence('seat_no', 'create')
            ->notEmpty('seat_no');

        $validator
            ->requirePresence('payment_status', 'create')
            ->notEmpty('payment_status');

        $validator
            ->requirePresence('payment_option', 'create')
            ->notEmpty('payment_option');

        $validator
            ->requirePresence('booking_date', 'create')
            ->notEmpty('booking_date');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['rout_id'], 'Route'));
        $rules->add($rules->existsIn(['user_id'], 'User'));

        return $rules;
    }
}
