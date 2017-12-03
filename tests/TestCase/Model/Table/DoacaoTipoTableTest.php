<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoacaoTipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoacaoTipoTable Test Case
 */
class DoacaoTipoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DoacaoTipoTable
     */
    public $DoacaoTipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.doacao_tipo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DoacaoTipo') ? [] : ['className' => DoacaoTipoTable::class];
        $this->DoacaoTipo = TableRegistry::get('DoacaoTipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DoacaoTipo);

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
