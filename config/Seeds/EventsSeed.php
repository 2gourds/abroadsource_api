<?php
use Migrations\AbstractSeed;

/**
 * Events seed.
 */
class EventsSeed extends AbstractSeed
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
                'name' => 'event 1',
                'frequency' => 'Once-Off',
                'start_date_time' => '2020-12-01 00:00:00',
                'end_date_time' => NULL,
                'duration' => '60',
            ],
            [
                'id' => '2',
                'name' => 'event 2',
                'frequency' => 'Once-Off',
                'start_date_time' => '2020-11-01 00:00:00',
                'end_date_time' => NULL,
                'duration' => '60',
            ],
            [
                'id' => '3',
                'name' => 'event 3',
                'frequency' => 'Once-Off',
                'start_date_time' => '2020-12-15 00:00:00',
                'end_date_time' => NULL,
                'duration' => '60',
            ],
            [
                'id' => '4',
                'name' => 'event 4',
                'frequency' => 'Weekly',
                'start_date_time' => '2021-01-01 00:00:00',
                'end_date_time' => '2021-03-31 00:00:00',
                'duration' => '60',
            ],
        ];

        $table = $this->table('events');
        $table->insert($data)->save();
    }
}
