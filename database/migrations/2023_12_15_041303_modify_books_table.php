<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->integer('quantity')->after('cover');
            $table->string('author',150)->change();
            $table->string('publisher',100)->change();
            $table->string('city',75)->change();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('quantity');
            $table->string('author')->change();
            $table->string('publisher')->change();
            $table->string('city')->change();
            //
        });
    }
};
