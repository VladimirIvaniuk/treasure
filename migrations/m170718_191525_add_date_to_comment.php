<?php

use yii\db\Migration;

class m170718_191525_add_date_to_comment extends Migration
{
    public function safeUp()
    {
        $this->addColumn('comment', 'date', $this->date());
    }

    public function safeDown()
    {
        $this->dropColumn('comment', 'date');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170718_191525_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
