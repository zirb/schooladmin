<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnoMateriaFixture
 *
 */
class AlumnoMateriaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumno_materia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_alumno' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_materia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_alumno' => ['type' => 'index', 'columns' => ['id_alumno'], 'length' => []],
            'id_materia' => ['type' => 'index', 'columns' => ['id_materia'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'alumno_materia_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_alumno'], 'references' => ['alumnos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'alumno_materia_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_materia'], 'references' => ['materias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_alumno' => 1,
            'id_materia' => 1
        ],
    ];
}
