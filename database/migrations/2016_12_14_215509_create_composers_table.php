<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComposersTable extends Migration
{
    /**
     * Create composers table
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composers', function (Blueprint $table) {
            # Fields for composers table
            $table->increments('id');
            $table->timestamps();
            $table->string('last_name');
            $table->string('first_name')->nullable();
            $table->string('dates');
        });
    }

    /**
     *Drop the composers table
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('composers');
    }
}
