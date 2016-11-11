<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnos Model
 *
 * @method \App\Model\Entity\Alumno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alumno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno findOrCreate($search, callable $callback = null)
 */
class AlumnosTable extends Table
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

        $this->table('alumnos');
        $this->displayField('id');
        $this->primaryKey('id');
        
	$this->belongsTo('Users', [
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
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        return $validator;
    }
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['id_user']));
        $rules->add($rules->existsIn(['id'], 'Users'));
        return $rules;
    }
}
