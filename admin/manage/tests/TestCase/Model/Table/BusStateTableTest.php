<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusStateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusStateTable Test Case
 */
class BusStateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusStateTable
     */
    public $BusState;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bus_state',
        'app.buses',
        'app.terminals',
        'app.agent_terminal',
        'app.agents',
        'app.bus_count',
        'app.excess',
        'app.destination_terminals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BusState') ? [] : ['className' => BusStateTable::class];
        $this->BusState = TableRegistry::get('BusState', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BusState);

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
