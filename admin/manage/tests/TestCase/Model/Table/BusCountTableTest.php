<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusCountTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusCountTable Test Case
 */
class BusCountTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusCountTable
     */
    public $BusCount;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bus_count',
        'app.terminals',
        'app.agent_terminal',
        'app.agents',
        'app.bus_state',
        'app.excess'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BusCount') ? [] : ['className' => BusCountTable::class];
        $this->BusCount = TableRegistry::get('BusCount', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusCount);

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
