<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class ChangeimageIdTocards extends AbstractMigration
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
        $table = $this->table('cards');
        $table->changeColumn('image_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->update();
    }
        public function down(){
            $table = $this->table('cards');
            $table->changeColumn('image_id','integer',[
        ]);
            $table->update();
    }
}
