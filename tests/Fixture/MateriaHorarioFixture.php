<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MateriaHorarioFixture
 *
 */
class MateriaHorarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'materia_horario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_materia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_horario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_materia' => ['type' => 'index', 'columns' => ['id_materia'], 'length' => []],
            'id_horario' => ['type' => 'index', 'columns' => ['id_horario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'materia_horario_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_materia'], 'references' => ['materias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'materia_horario_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_horario'], 'references' => ['horarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_materia' => 1,
            'id_horario' => 1
        ],
    ];
}
