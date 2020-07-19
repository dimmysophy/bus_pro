<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusTable Test Case
 */
class BusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BusTable
     */
    public $Bus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bus',
        'app.bus_types',
        'app.amenities',
        'app.board_points',
        'app.book_bus',
        'app.booking_details',
        'app.bus_gallery',
        'app.bus_state',
        'app.cancellation',
        'app.drop_points',
        'app.rating',
        'app.route',
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
        $config = TableRegistry::exists('Bus') ? [] : ['className' => BusTable::class];
        $this->Bus = TableRegistry::get('Bus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bus);

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
