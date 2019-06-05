<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function ($table) {
            $table->boolean('is_employee')->nullable();
        });

        Schema::create('ticket', function (Blueprint $table) {
            //Shared between UGD and UVE
            $table->increments('id');
            $table->string('type');
            $table->unsignedInteger('employee')->nullable();
            $table->unsignedInteger('client');
            $table->string('title')->nullable();
            $table->string('client_timezone')->nullable();
            $table->boolean('received')->nullable();
            $table->boolean('production')->nullable();
            $table->boolean('client_review')->nullable();
            $table->boolean('delivered')->nullable();
            $table->boolean('closed')->nullable();
            $table->string('link')->nullable();
            $table->integer('freshdesk_id')->nullable();
            $table->timestamps();
            $table->foreign('employee')->references('id')->on('users');
            $table->foreign('client')->references('id')->on('users');
            /*$table->string('description')->nullable();
            $table->string('list')->nullable();
            $table->string('target')->nullable();
            $table->string('client_link')->nullable();
            $table->string('file_format')->nullable();
            $table->string('design_size')->nullable();
            $table->string('design_purpose')->nullable();*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
