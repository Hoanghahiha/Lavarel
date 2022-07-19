<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->integer("cId")->primary();
            $table->string("phoneCTM",255);
            $table->string("sId",20);
            $table->string("carId",20);
            $table->date("startDate");
            $table->date("endDate");
            $table->decimal("total",65);
            $table->string("image",255);
            $table->timestamps();
            $table->foreign("phoneCTM")->references("Phone")->on("customers");
            $table->foreign("sID")->references("sID")->on("staffs");
            $table->foreign("carID")->references("carID")->on("cars");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
