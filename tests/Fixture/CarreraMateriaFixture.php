<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarreraMateriaFixture
 *
 */
class CarreraMateriaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'carrera_materia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_carrera' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_materia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_materia' => ['type' => 'index', 'columns' => ['id_materia'], 'length' => []],
            'id_carrera' => ['type' => 'index', 'columns' => ['id_carrera'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'carrera_materia_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_materia'], 'references' => ['materias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'carrera_materia_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_carrera'], 'references' => ['carreras', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_carrera' => 1,
            'id_materia' => 1
        ],
    ];
}
