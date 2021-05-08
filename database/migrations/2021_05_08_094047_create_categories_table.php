<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

//        Schema::table('products', function (Blueprint $table) {
//            $table->foreignId('category_id')->after('id')->nullable()->constrained()->nullOnDelete();
////            $table->unsignedBigInteger('category_id')->after('id')->nullable();
////            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
        Schema::dropIfExists('categories');
    }
}
