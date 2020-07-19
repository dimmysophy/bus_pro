<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AgentController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AgentController Test Case
 */
class AgentControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
