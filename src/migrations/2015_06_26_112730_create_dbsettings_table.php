<?php

use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateDbconfigSettingsTable.
 *
 * Schema
 */
class CreateDbsettingsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        /* @var \Illuminate\Database\Schema\Blueprint $table */
        Schema::create('dbsettings', function ($table) {
            $table->increments('id');
            $table->string('package')->nullable();
            $table->string('group')->default('config');
            $table->string('key');
            $table->string('value')->nullable();
            $table->string('type');
            $table->string('environment')->nullable();

            $table->unique(array('package', 'key', 'environment'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('dbsettings');
    }
}
