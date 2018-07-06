<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('report_type_id')->unsigned();
            $table->integer('sensor_log_id')->unsigned();
            $table->string("name");
            $table->string("address");
            $table->string("country");
            $table->string("phone_number",14);
            $table->string("attr_8");
            $table->string("attr_9");
            $table->string("attr_10");
            $table->foreign('sensor_log_id')
                ->references('id')->on('sensor_logs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('report_type_id')
                ->references('id')->on('report_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('reports');
    }
}
