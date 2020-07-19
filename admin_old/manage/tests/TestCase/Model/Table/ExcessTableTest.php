<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExcessTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExcessTable Test Case
 */
class ExcessTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExcessTable
     */
    public $Excess;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.excess',
        'app.terminals',
        'app.agent_terminal',
        'app.agents',
        'app.bus_count',
        'app.bus_state',
        'app.buses',
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
        $config = TableRegistry::exists('Excess') ? [] : ['className' => ExcessTable::class];
        $this->Excess = TableRegistry::get('Excess', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Excess);

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
