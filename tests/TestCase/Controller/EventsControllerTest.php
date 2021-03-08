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
    public function testSchedule_post_responseOk()
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

    /**
     * @dataProvider malformedRequestProvider
     */
    public function testSchedule_malformedRequest_badResponse(array $malformedRequest)
    {
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post('/event', $malformedRequest);
        $this->assertResponseCode(400);
    }

    public function malformedRequestProvider(): array
    {
        return [
            [
                'eventName not defined' => [
                    'frequency' => 'Once-Off',
                    'startDateTime' => '2020-12-01 00:00',
                    'endDateTime' => '2020-12-15 00:00',
                    'duration' => 30,
                    'invitees' => [1,2,3]
                ]
            ],
            [
                'frequency not defined' => [
                    'eventName' => 'event 1',
                    'startDateTime' => '2020-12-01 00:00',
                    'endDateTime' => '2020-12-15 00:00',
                    'duration' => 30,
                    'invitees' => [1,2,3]
                ]
            ],
            [
                'startDateTime not defined' => [
                    'eventName' => 'event 1',
                    'frequency' => 'Once-Off',
                    'endDateTime' => '2020-12-15 00:00',
                    'duration' => 30,
                    'invitees' => [1,2,3]
                ]
            ],
            [
                'eventName is null' => [
                    'eventName' => null,
                    'frequency' => 'Once-Off',
                    'startDateTime' => '2020-12-01 00:00',
                    'endDateTime' => '2020-12-15 00:00',
                    'duration' => 30,
                    'invitees' => [1,2,3]
                ]
            ],
            [
                'frequency is null' => [
                    'eventName' => 'event 1',
                    'frequency' => null,
                    'startDateTime' => '2020-12-01 00:00',
                    'endDateTime' => '2020-12-15 00:00',
                    'duration' => 30,
                    'invitees' => [1,2,3]
                ]
            ],
            [
                'startDateTime is null' => [
                    'eventName' => 'event 1',
                    'frequency' => 'Once-Off',
                    'startDateTime' => null,
                    'endDateTime' => '2020-12-15 00:00',
                    'duration' => 30,
                    'invitees' => [1,2,3]
                ]
            ],
        ];
    }
}
