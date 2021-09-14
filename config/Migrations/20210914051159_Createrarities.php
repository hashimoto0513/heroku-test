<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Createrarities extends AbstractMigration
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
        $table = $this->table('rarities');
        $table->addColumn('rarity_name', 'string', [
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('start_time', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('end_time', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
    }
}
