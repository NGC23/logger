<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class LogbookEntriesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
//        $logbookEntries = $this->table('logbook_entries');
//        $logbookEntries->addColumn('name', 'string', ['limit' => 250])
//            ->addColumn('personal_best', 'float')
//            ->addColumn('user_id', 'integer')
//            ->addColumn('logbook_id', 'integer')
//            ->addColumn('created', 'datetime')
//            ->addColumn('updated', 'datetime', ['null' => true])
//            ->create();
    }
}
