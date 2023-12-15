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
    public function up():void
    {
        Schema::create('bookshelves', function (Blueprint $table) {
            $table->id();
            $table->string('code',15);
            $table->string('name');
            $table->timestamps();
        });
    schema::table('books',function (Blueprint $table){
        $table->unsignedBiginteger('bookshelf_id')->after('quantity');

        $table->foreign('bookshelf_id')
             ->references('id')
             ->on('bookshelves')
             ->onUpdate('cascade')
             ->onDelete('cascade');
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void


    {
        Schema::table('books',function (Blueprint $table){
            $table->dropForeign('books_bookshelf_id_foreign');
            $table->dropColumn('bookshelf_id');
        });


        Schema::dropIfExists('bookshelves');
    }
};
