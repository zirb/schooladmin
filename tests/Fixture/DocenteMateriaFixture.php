<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocenteMateriaFixture
 *
 */
class DocenteMateriaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'docente_materia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_docentes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_materias' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_docentes' => ['type' => 'index', 'columns' => ['id_docentes'], 'length' => []],
            'id_materias' => ['type' => 'index', 'columns' => ['id_materias'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'docente_materia_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_docentes'], 'references' => ['docentes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'docente_materia_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_materias'], 'references' => ['materias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'id_docentes' => 1,
            'id_materias' => 1
        ],
    ];
}
