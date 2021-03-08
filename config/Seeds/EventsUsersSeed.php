<?php
use Migrations\AbstractSeed;

/**
 * EventsUsers seed.
 */
class EventsUsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'event_id' => '1',
                'user_id' => '1',
            ],
            [
                'id' => '2',
                'event_id' => '1',
                'user_id' => '2',
            ],
            [
                'id' => '3',
                'event_id' => '1',
                'user_id' => '3',
            ],
            [
                'id' => '4',
                'event_id' => '2',
                'user_id' => '1',
            ],
            [
                'id' => '5',
                'event_id' => '2',
                'user_id' => '2',
            ],
            [
                'id' => '6',
                'event_id' => '2',
                'user_id' => '3',
            ],
            [
                'id' => '7',
                'event_id' => '3',
                'user_id' => '1',
            ],
            [
                'id' => '8',
                'event_id' => '3',
                'user_id' => '2',
            ],
            [
                'id' => '9',
                'event_id' => '3',
                'user_id' => '3',
            ],
        ];

        $table = $this->table('events_users');
        $table->insert($data)->save();
    }
}
