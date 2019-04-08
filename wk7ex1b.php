<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    public function change()
    {
        $users = $this->table('monster');
        $users->addColumn('name', 'string', ['limit' => 20])
              ->addColumn('image', 'blob', ['null' => false])
              ->addIndex(['audio', 'blob'], ['null' => false])
              ->create();
    }
}
