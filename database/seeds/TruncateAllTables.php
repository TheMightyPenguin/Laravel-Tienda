<?php

use Illuminate\Database\Seeder;

class TruncateAllTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement("SET foreign_key_checks=0");
        $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();

        foreach($tableNames as $name) {
            if($name == 'migrations')
                continue;
            DB::table($name)->truncate();
        }
        DB::statement("SET foreign_key_checks=1");
    }
}
