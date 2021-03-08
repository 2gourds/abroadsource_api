<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsUsersFixture
 */
class EventsUsersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'event_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_id_index' => ['type' => 'index', 'columns' => ['event_id'], 'length' => []],
            'user_id_index' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'event_id' => 1,
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'event_id' => 1,
                'user_id' => 2,
            ],
            [
                'id' => 3,
                'event_id' => 1,
                'user_id' => 3,
            ],
            [
                'id' => 4,
                'event_id' => 2,
                'user_id' => 1,
            ],
            [
                'id' => 5,
                'event_id' => 2,
                'user_id' => 2,
            ],
            [
                'id' => 6,
                'event_id' => 2,
                'user_id' => 3,
            ],
            [
                'id' => 7,
                'event_id' => 3,
                'user_id' => 1,
            ],
            [
                'id' => 8,
                'event_id' => 3,
                'user_id' => 2,
            ],
            [
                'id' => 9,
                'event_id' => 3,
                'user_id' => 3,
            ],
        ];
        parent::init();
    }
}
