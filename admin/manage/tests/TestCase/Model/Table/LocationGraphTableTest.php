<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocationGraphTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocationGraphTable Test Case
 */
class LocationGraphTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocationGraphTable
     */
    public $LocationGraph;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.location_graph'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LocationGraph') ? [] : ['className' => LocationGraphTable::class];
        $this->LocationGraph = TableRegistry::get('LocationGraph', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LocationGraph);

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
