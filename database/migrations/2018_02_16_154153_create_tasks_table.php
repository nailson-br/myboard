<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->integer('team_id');
            $table->text('description');
            $table->integer('cod');
            $table->integer('type_id');
            $table->integer('status_id');
            $table->text('job_type');
            $table->decimal('effort', 2, 2);
            $table->integer('story_point');
            $table->char('size', 2);
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
        Schema::drop('tasks');
    }
}
