<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RouteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RouteTable Test Case
 */
class RouteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RouteTable
     */
    public $Route;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.route',
        'app.bus',
        'app.bus_types',
        'app.amenities',
        'app.board_points',
        'app.book_bus',
        'app.booking_details',
        'app.bookings',
        'app.buses',
        'app.routs',
        'app.boarding_points',
        'app.users',
        'app.bus_gallery',
        'app.bus_state',
        'app.terminals',
        'app.agent_terminal',
        'app.agent',
        'app.bus_count',
        'app.excess',
        'app.destination_terminals',
        'app.cancellation',
        'app.drop_points',
        'app.rating',
        'app.seat_layout'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Route') ? [] : ['className' => RouteTable::class];
        $this->Route = TableRegistry::get('Route', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Route);

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
