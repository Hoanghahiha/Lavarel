<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStusentSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stusent_subjects', function (Blueprint $table) {
            $table->string("sid",20);
            $table->string("sbid",20);
            $table->timestamps();
            $table->foreign("sid")->references("sid")->on("students");
            $table->foreign("sbid")->references("sbid")->on("subjects");
            $table->unique(["sid","sbid"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stusent_subjects');
    }
}
