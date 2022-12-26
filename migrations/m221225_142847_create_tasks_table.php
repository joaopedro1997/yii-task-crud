<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 */
class m221225_142847_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tasks}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(255)->notNull(),
            'due_date' => $this->date()->notNull(),
            'created_at' => $this->integer()->unsigned(),
            'updated_at' => $this->integer()->unsigned()
        ]);

        $i = 1;

        $this->batchInsert('{{%tasks}}',
            ['name', 'due_date', 'created_at'], [
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i++, date('Y-m-d'), date('U')],
            ["Tarefa". $i, date('Y-m-d'), date('U')],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tasks}}');
    }
}
