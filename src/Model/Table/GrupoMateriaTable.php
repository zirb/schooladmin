<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GrupoMateria Model
 *
 * @method \App\Model\Entity\GrupoMaterium get($primaryKey, $options = [])
 * @method \App\Model\Entity\GrupoMaterium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GrupoMaterium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GrupoMaterium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GrupoMaterium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GrupoMaterium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GrupoMaterium findOrCreate($search, callable $callback = null)
 */
class GrupoMateriaTable extends Table
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

        $this->table('grupo_materia');
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
            ->integer('id_grupo')
            ->requirePresence('id_grupo', 'create')
            ->notEmpty('id_grupo');

        $validator
            ->integer('id_materia')
            ->requirePresence('id_materia', 'create')
            ->notEmpty('id_materia');

        return $validator;
    }
}
