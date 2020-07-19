<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bus Model
 *
 * @property \App\Model\Table\BusTypesTable|\Cake\ORM\Association\BelongsTo $BusTypes
 * @property \App\Model\Table\AmenitiesTable|\Cake\ORM\Association\BelongsTo $Amenities
 * @property \App\Model\Table\BoardPointsTable|\Cake\ORM\Association\HasMany $BoardPoints
 * @property \App\Model\Table\BookBusTable|\Cake\ORM\Association\HasMany $BookBus
 * @property \App\Model\Table\BookingDetailsTable|\Cake\ORM\Association\HasMany $BookingDetails
 * @property \App\Model\Table\BusGalleryTable|\Cake\ORM\Association\HasMany $BusGallery
 * @property \App\Model\Table\BusStateTable|\Cake\ORM\Association\HasMany $BusState
 * @property \App\Model\Table\CancellationTable|\Cake\ORM\Association\HasMany $Cancellation
 * @property \App\Model\Table\DropPointsTable|\Cake\ORM\Association\HasMany $DropPoints
 * @property \App\Model\Table\RatingTable|\Cake\ORM\Association\HasMany $Rating
 * @property \App\Model\Table\RouteTable|\Cake\ORM\Association\HasMany $Route
 * @property \App\Model\Table\SeatLayoutTable|\Cake\ORM\Association\HasMany $SeatLayout
 *
 * @method \App\Model\Entity\Bus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bus findOrCreate($search, callable $callback = null, $options = [])
 */
class BusTable extends Table
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

        $this->setTable('bus');
        $this->setDisplayField('bus_name');
        $this->setPrimaryKey('id');

        $this->belongsTo('BusTypes', [
            'foreignKey' => 'bus_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Amenities', [
            'foreignKey' => 'amenities_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('BoardPoints', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('BookBus', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('BookingDetails', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('BusGallery', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('BusState', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('Cancellation', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('DropPoints', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('Rating', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('Route', [
            'foreignKey' => 'bus_id'
        ]);
        $this->hasMany('SeatLayout', [
            'foreignKey' => 'bus_id'
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
            ->requirePresence('bus_name', 'create')
            ->notEmpty('bus_name');

        $validator
            ->requirePresence('bus_reg_no', 'create')
            ->notEmpty('bus_reg_no');

        $validator
            ->integer('max_seats')
            ->requirePresence('max_seats', 'create')
            ->notEmpty('max_seats');

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
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('bus_status')
            ->requirePresence('bus_status', 'create')
            ->notEmpty('bus_status');

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
        $rules->add($rules->existsIn(['bus_type_id'], 'BusTypes'));
        $rules->add($rules->existsIn(['amenities_id'], 'Amenities'));

        return $rules;
    }
}
