<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookingDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookingDetailsTable Test Case
 */
class BookingDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BookingDetailsTable
     */
    public $BookingDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.booking_details',
        'app.bookings',
        'app.buses',
        'app.routs',
        'app.boarding_points',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BookingDetails') ? [] : ['className' => BookingDetailsTable::class];
        $this->BookingDetails = TableRegistry::get('BookingDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BookingDetails);

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
