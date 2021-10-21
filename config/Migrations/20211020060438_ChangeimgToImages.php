<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class ChangeimgToImages extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('images');
        $table->changeColumn('img','string',[
            'default' => null,
            'limit'=>100,
            'null' => true,
        ]);
        $table->update();
    }
    public function down(){
        $table = $this->table('images');
        $table->changeColumn('img','string',[
            'limit'=>100,
        ]);
        $table->update();
    }

}
