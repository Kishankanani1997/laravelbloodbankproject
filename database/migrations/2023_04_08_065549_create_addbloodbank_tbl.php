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
        Schema::create('addbloodbank_tbl', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("address");
            $table->string("number");
            $table->string("email");
            $table->string("bbtype");
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
        Schema::dropIfExists('addbloodbank_tbl');
    }
};
