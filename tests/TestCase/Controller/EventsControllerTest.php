<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EventsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EventsController Test Case
 *
 * @uses \App\Controller\EventsController
 */
class EventsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Events',
    ];

    /**
     * Test schedule method
     *
     * @return void
     */
    public function testSchedule_postResponseOk()
    {
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post('/event', [
            'eventName' => 'event 1',
            'frequency' => 'Once-Off',
            'startDateTime' => '2020-12-01 00:00',
            'endDateTime' => '2020-12-15 00:00',
            'duration' => 30,
            'invitees' => [1,2,3]
        ]);

        $this->assertResponseOk();
    }
}
