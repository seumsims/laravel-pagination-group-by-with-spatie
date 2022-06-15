<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testers', function (Blueprint $table) {
            $table->increments(id);
            $table->string('name',50)->nullable()->default('NULL');
            $table->datetime('created_at')->nullable()->default('current_timestamp');
            $table->datetime('updated_at')->nullable()->default('current_timestamp');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testers');
    }
}
