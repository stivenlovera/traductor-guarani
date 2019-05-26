<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificationTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classification_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classification_id')->unsigned();
            $table->integer('translation_id')->unsigned();
            $table->timestamps();
            //esta es la 3er tabla de muchos a muchos
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('translation_id')->references('id')->on('translations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classification_translation');
    }
}
