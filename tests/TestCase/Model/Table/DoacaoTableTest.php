<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoacaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoacaoTable Test Case
 */
class DoacaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DoacaoTable
     */
    public $Doacao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.doacao',
        'app.doador',
        'app.situacao_cadastro',
        'app.users',
        'app.voluntario',
        'app.doacao_tipo',
        'app.doacao_status'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Doacao') ? [] : ['className' => DoacaoTable::class];
        $this->Doacao = TableRegistry::get('Doacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Doacao);

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
