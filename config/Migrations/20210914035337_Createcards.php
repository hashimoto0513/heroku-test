<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Createcards extends AbstractMigration
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
        $table = $this->table('cards');
        $table->addColumn('CardNumber', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('CardName', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => true,
        ]);
        $table->addColumn('color', 'string', [
            'limit' => 2,
            'null' => false,
        ]);
        $table->addColumn('cost', 'integer', [
            'limit' => 2,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('version_id', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('rarity_id', 'integer', [
            'null' => false,
        ]);
        $table->create();
    }
}
