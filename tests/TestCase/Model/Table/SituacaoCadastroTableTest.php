<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SituacaoCadastroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SituacaoCadastroTable Test Case
 */
class SituacaoCadastroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SituacaoCadastroTable
     */
    public $SituacaoCadastro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.situacao_cadastro'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SituacaoCadastro') ? [] : ['className' => SituacaoCadastroTable::class];
        $this->SituacaoCadastro = TableRegistry::get('SituacaoCadastro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SituacaoCadastro);

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
