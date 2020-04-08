<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();


            $table->string("name")->comment("name");
            $table->string("phone")->comment("mobile phone");

            $table->integer("period")->nullable()->comment("loan period");
            $table->string("id_card")->nullable()->comment("id_card");
            $table->string("invite")->nullable()->comment("invite user");

            $table->integer("amount")->nullable()->comment("loan amount");


            $table->smallInteger("work_type")->nullable()->comment("work type");


            $table->text("info")->nullable()->comment("more info  json format");

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
        Schema::dropIfExists('infos');
    }
}
