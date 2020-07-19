<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgentTable Test Case
 */
class AgentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgentTable
     */
    public $Agent;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agent',
        'app.agent_terminal',
        'app.agents',
        'app.terminals',
        'app.bus_count',
        'app.bus_state',
        'app.buses',
        'app.destination_terminals',
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
        $config = TableRegistry::exists('Agent') ? [] : ['className' => AgentTable::class];
        $this->Agent = TableRegistry::get('Agent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agent);

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
