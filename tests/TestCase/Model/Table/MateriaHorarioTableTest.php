<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MateriaHorarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MateriaHorarioTable Test Case
 */
class MateriaHorarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MateriaHorarioTable
     */
    public $MateriaHorario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materia_horario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MateriaHorario') ? [] : ['className' => 'App\Model\Table\MateriaHorarioTable'];
        $this->MateriaHorario = TableRegistry::get('MateriaHorario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MateriaHorario);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
