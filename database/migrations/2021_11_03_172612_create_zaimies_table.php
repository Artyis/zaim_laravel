<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZaimiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('zaimies', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('url');
          $table->string('title')->nullable();
          $table->text('text');
          $table->text('description')->nullable();
          $table->text('img')->nullable();
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
        Schema::dropIfExists('zaimies');
    }
}
