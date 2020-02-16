<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("car_id");
            $table->foreign("car_id")->references("id")->on("cars")->onDelete("cascade");
            $table->unsignedBigInteger("status_id");
            $table->foreign("status_id")->references("id")->on("statuses")->onDelete("cascade");
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
        Schema::dropIfExists('car_status');
    }
}
