<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mfos', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('url');
          $table->string('title')->nullable();
          $table->text('text');
          $table->text('description')->nullable();
          $table->text('img')->nullable();
          $table->bigInteger('sumfrom');
          $table->bigInteger('sumto');
          $table->bigInteger('stavka');
          $table->bigInteger('dayto');
          $table->string('url_pp');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mfos');
    }
}
