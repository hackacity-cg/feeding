<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoacaoStatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoacaoStatusTable Test Case
 */
class DoacaoStatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DoacaoStatusTable
     */
    public $DoacaoStatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.doacao_status',
        'app.doacao'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DoacaoStatus') ? [] : ['className' => DoacaoStatusTable::class];
        $this->DoacaoStatus = TableRegistry::get('DoacaoStatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DoacaoStatus);

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
