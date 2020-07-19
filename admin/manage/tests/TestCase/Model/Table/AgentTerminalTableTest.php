<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgentTerminalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgentTerminalTable Test Case
 */
class AgentTerminalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgentTerminalTable
     */
    public $AgentTerminal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agent_terminal',
        'app.agents',
        'app.terminals',
        'app.bus_count',
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
        $config = TableRegistry::exists('AgentTerminal') ? [] : ['className' => AgentTerminalTable::class];
        $this->AgentTerminal = TableRegistry::get('AgentTerminal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AgentTerminal);

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
