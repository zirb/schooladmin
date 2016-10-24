<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MateriaHorario Model
 *
 * @method \App\Model\Entity\MateriaHorario get($primaryKey, $options = [])
 * @method \App\Model\Entity\MateriaHorario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MateriaHorario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MateriaHorario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MateriaHorario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MateriaHorario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MateriaHorario findOrCreate($search, callable $callback = null)
 */
class MateriaHorarioTable extends Table
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

        $this->table('materia_horario');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id_materia')
            ->requirePresence('id_materia', 'create')
            ->notEmpty('id_materia');

        $validator
            ->integer('id_horario')
            ->requirePresence('id_horario', 'create')
            ->notEmpty('id_horario');

        return $validator;
    }
}
