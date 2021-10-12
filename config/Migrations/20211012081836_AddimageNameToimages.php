<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddimageNameToimages extends AbstractMigration
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
        $table = $this->table('images');
        $table->addColumn('image_name','string',[
            'limit' => 20,
            'default' => null,
            'null' => false,
            ]);
            $table->update();
        $table->update();
    }
}
