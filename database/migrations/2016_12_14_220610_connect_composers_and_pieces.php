<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectComposersAndPieces extends Migration
{
    /**
     * Add foreign key for composer to pieces table
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pieces', function (Blueprint $table) {

            # Add the composer_id column
            $table->integer('composer_id')->unsigned();
            # Make it a foreign key connected to the id column in the composers table
            $table->foreign('composer_id')->references('id')->on('composers');
        });
    }

    /**
     * Drop the new foreign key field
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pieces', function (Blueprint $table) {

            # Remove the foreign-key quality
            $table->dropForeign('pieces_composer_id_foreign');
            # Drop the composer_id column
            $table->dropColumn('composer_id');

        });
    }
}
