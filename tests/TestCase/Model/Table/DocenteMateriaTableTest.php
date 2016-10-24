<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocenteMateriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocenteMateriaTable Test Case
 */
class DocenteMateriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocenteMateriaTable
     */
    public $DocenteMateria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.docente_materia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DocenteMateria') ? [] : ['className' => 'App\Model\Table\DocenteMateriaTable'];
        $this->DocenteMateria = TableRegistry::get('DocenteMateria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocenteMateria);

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
