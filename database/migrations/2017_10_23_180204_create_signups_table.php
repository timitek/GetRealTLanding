<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateSignupsTable extends Migration
{
    //use SoftDeletes;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signups', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string("firstName", 50);
            $table->string("lastName", 50);
            $table->string('email', 100)->unique();
            $table->string("phone", 50);
            $table->string("address", 100);
            $table->string("city", 100);
            $table->string("state", 100);
            $table->string("zip", 50);
            $table->string("theme", 20);
            //$table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signups');
    }
}
