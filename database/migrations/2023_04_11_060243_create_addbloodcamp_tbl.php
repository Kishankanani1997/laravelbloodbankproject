<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addbloodcamp_tbl', function (Blueprint $table) {
            $table->increments("id");
            $table->string("cname");
            $table->date("cdate");
            $table->time("ctime");
            $table->string("address");
            $table->string("statelist");
            $table->string("city");
            $table->BigInteger("number");
            $table->string("conductedby");
            $table->string("organizedby");
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
        Schema::dropIfExists('addbloodcamp_tbl');
    }
};
