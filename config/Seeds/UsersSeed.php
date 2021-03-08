<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'name' => 'user 1',
                'created' => '2021-03-08 00:00:00',
                'modified' => '2021-03-08 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'user 2',
                'created' => '2021-03-08 00:00:00',
                'modified' => '2021-03-08 00:00:00',
            ],
            [
                'id' => '3',
                'name' => 'user 3',
                'created' => '2021-03-08 00:00:00',
                'modified' => '2021-03-08 00:00:00',
            ],
            [
                'id' => '4',
                'name' => 'user 4',
                'created' => '2021-03-08 00:00:00',
                'modified' => '2021-03-08 00:00:00',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
