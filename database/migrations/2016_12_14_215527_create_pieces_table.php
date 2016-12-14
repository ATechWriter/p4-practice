<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiecesTable extends Migration
{
    /**
     * Create the pieces table; no link to composers yet
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function(Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('publication_date')->nullable();
            $table->string('manuscript')->nullable();
            $table->string('link')->nullable();
            $table->text('lyrics')->nullable();
            $table->text('translation')->nullable();
            $table->text('comments')->nullable();

        });
    }

    /**
     * Drop the pieces table
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pieces');
    }
}
