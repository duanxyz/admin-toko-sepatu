<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_review', function (Blueprint $table) {
            $table->bigInteger('review_id')->unsigned();
            $table->foreign('review_id')
                ->references('id')
                ->on('reviews')
                ->onDelete('cascade');
            $table->bigInteger('item_id')->unsigned();
            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_review');
    }
}
