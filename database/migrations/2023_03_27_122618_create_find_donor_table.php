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
        Schema::create('find_donor', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("surname");
            $table->string("email");
            $table->string("verifyemail");
            $table->bigInteger("number");
            $table->string("occupation");
            $table->string("address");
            $table->string("gender");
            $table->string("bloodtype");
            $table->string("statelist");
            $table->string("donate");
            $table->string("disease");
            $table->string("allergy");
            $table->date("date");
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
        Schema::dropIfExists('find_donor');
    }
};
