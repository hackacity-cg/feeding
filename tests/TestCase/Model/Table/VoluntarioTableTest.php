<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VoluntarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VoluntarioTable Test Case
 */
class VoluntarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VoluntarioTable
     */
    public $Voluntario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.voluntario',
        'app.situacao_cadastro',
        'app.doacao',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Voluntario') ? [] : ['className' => VoluntarioTable::class];
        $this->Voluntario = TableRegistry::get('Voluntario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Voluntario);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
