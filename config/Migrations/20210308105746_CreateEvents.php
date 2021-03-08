<?php
use Migrations\AbstractMigration;

class CreateEvents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('events');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('frequency', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('start_date_time', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('end_date_time', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('duration', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->create();
    }
}
