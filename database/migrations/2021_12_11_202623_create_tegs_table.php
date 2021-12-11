<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tegs', function (Blueprint $table) {
            $table->id();
            $table -> string('author');
            $table -> string('teg');
            $table -> string('key');
            $table -> string('link');
            $table -> string('text');
            $table -> string('description');
            $table -> string('version');
            $table -> integer('saves');
            $table -> string('background');
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
        Schema::dropIfExists('tegs');
    }
}
