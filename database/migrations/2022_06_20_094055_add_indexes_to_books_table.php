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
        Schema::table('books', function (Blueprint $table) {
            $table->unique('slug');
            $table->index('title');
            $table->index('price');
            $table->index('publication_date');
            $table->unique('isbn');
            $table->fullText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unique('books_slug_unique');
            $table->index('books_title_index');
            $table->index('	books_price_index');
            $table->index('books_publication_date_index');
            $table->unique('books_isbn_unique');
            $table->fullText('books_description_fulltext');
        });
    }
};