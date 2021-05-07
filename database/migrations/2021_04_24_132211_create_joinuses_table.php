<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joinuses', function (Blueprint $table) {
            $table->text("firstname");
            $table->text("lastname");
            $table->text("email")->unique();
            $table->string("address");
            $table->string("address2")->nullable();
            $table->text("country");
            $table->text("city");
            $table->tinyInteger("zip");
            $table->text("designation");
            $table->tinyInteger("age");
            $table->state("state");
            $table->text("imageaddress");
            $table->unsignedBigInteger("user_id");

            $table->id();
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
        Schema::dropIfExists('joinuses');
    }
}
