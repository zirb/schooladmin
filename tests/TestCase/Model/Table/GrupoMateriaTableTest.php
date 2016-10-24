<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GrupoMateriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GrupoMateriaTable Test Case
 */
class GrupoMateriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GrupoMateriaTable
     */
    public $GrupoMateria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.grupo_materia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GrupoMateria') ? [] : ['className' => 'App\Model\Table\GrupoMateriaTable'];
        $this->GrupoMateria = TableRegistry::get('GrupoMateria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GrupoMateria);

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
