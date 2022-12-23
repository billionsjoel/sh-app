<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDesignAndPublisherToBookCoverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_cover', function (Blueprint $table) {
            $table->string('publisher')->after('description');
            $table->string('design')->after('publisher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_cover', function (Blueprint $table) {
            $table->dropColumn('publisher');
            $table->dropColumn('design');
        });
    }
}
