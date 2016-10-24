<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnoMateriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnoMateriaTable Test Case
 */
class AlumnoMateriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnoMateriaTable
     */
    public $AlumnoMateria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alumno_materia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AlumnoMateria') ? [] : ['className' => 'App\Model\Table\AlumnoMateriaTable'];
        $this->AlumnoMateria = TableRegistry::get('AlumnoMateria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AlumnoMateria);

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
