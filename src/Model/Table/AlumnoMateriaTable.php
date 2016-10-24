<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AlumnoMateria Model
 *
 * @method \App\Model\Entity\AlumnoMaterium get($primaryKey, $options = [])
 * @method \App\Model\Entity\AlumnoMaterium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AlumnoMaterium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AlumnoMaterium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AlumnoMaterium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AlumnoMaterium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AlumnoMaterium findOrCreate($search, callable $callback = null)
 */
class AlumnoMateriaTable extends Table
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

        $this->table('alumno_materia');
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
            ->integer('id_alumno')
            ->requirePresence('id_alumno', 'create')
            ->notEmpty('id_alumno');

        $validator
            ->integer('id_materia')
            ->requirePresence('id_materia', 'create')
            ->notEmpty('id_materia');

        return $validator;
    }
}
