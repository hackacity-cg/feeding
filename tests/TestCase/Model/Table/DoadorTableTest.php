<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoadorTable Test Case
 */
class DoadorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DoadorTable
     */
    public $Doador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.doador',
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
        $config = TableRegistry::exists('Doador') ? [] : ['className' => DoadorTable::class];
        $this->Doador = TableRegistry::get('Doador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Doador);

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
