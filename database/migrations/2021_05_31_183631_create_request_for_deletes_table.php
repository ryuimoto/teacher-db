<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestForDeletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_for_deletes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('classification');
            $table->string('thread_name');
            $table->string('name');
            $table->longText('urls')->nullable();
            $table->longText('delete_reason');
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
        Schema::dropIfExists('request_for_deletes');
    }
}
