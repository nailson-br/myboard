<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiscellaneousChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miscellaneous_changes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id');
            $table->text('changed_field');
            $table->text('old_value');
            $table->text('new_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('miscellaneous_changes');
    }
}
