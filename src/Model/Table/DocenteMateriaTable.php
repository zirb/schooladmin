<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DocenteMateria Model
 *
 * @method \App\Model\Entity\DocenteMaterium get($primaryKey, $options = [])
 * @method \App\Model\Entity\DocenteMaterium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DocenteMaterium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DocenteMaterium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocenteMaterium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DocenteMaterium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DocenteMaterium findOrCreate($search, callable $callback = null)
 */
class DocenteMateriaTable extends Table
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

        $this->table('docente_materia');
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
            ->integer('id_docentes')
            ->requirePresence('id_docentes', 'create')
            ->notEmpty('id_docentes');

        $validator
            ->integer('id_materias')
            ->requirePresence('id_materias', 'create')
            ->notEmpty('id_materias');

        return $validator;
    }
}
