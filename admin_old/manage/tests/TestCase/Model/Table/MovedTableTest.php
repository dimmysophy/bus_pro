<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovedTable Test Case
 */
class MovedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovedTable
     */
    public $Moved;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.moved',
        'app.users',
        'app.booking_details',
        'app.bookings',
        'app.bus',
        'app.bus_types',
        'app.amenities',
        'app.board_points',
        'app.book_bus',
        'app.bus_gallery',
        'app.bus_state',
        'app.buses',
        'app.terminals',
        'app.agent_terminal',
        'app.agent',
        'app.bus_count',
        'app.excess',
        'app.destination_terminals',
        'app.cancellation',
        'app.drop_points',
        'app.rating',
        'app.route',
        'app.seat_layout',
        'app.boarding_points',
        'app.old_routes',
        'app.new_routes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Moved') ? [] : ['className' => MovedTable::class];
        $this->Moved = TableRegistry::get('Moved', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Moved);

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
