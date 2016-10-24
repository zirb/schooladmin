<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarreraMateriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarreraMateriaTable Test Case
 */
class CarreraMateriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarreraMateriaTable
     */
    public $CarreraMateria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carrera_materia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CarreraMateria') ? [] : ['className' => 'App\Model\Table\CarreraMateriaTable'];
        $this->CarreraMateria = TableRegistry::get('CarreraMateria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CarreraMateria);

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
