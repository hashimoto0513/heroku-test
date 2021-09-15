<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddFullDescriptionToCards extends AbstractMigration
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
        $table->addColumn('full_description', 'integer', [
            'limit' => 1,
            'null' => false,
        ]);
        $table->update();
    }
}
