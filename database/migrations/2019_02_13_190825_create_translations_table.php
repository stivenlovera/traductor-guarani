<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guarani',128);
            $table->string('slug',128)->unique();
            $table->string('translated',30);
            $table->text('definition',256);
            $table->enum('status',['ACTIVE','DISABLED'])->default('ACTIVE');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //relacion de 1 a muchos
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translations');
    }
}
