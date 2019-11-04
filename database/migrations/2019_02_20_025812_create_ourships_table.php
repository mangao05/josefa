<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ship_img');
            $table->string('ship_name');
            $table->string('hull_number');
            $table->string('LOA');
            $table->string('BREADTH');
            $table->string('DRAFT');
            $table->string('DEPTH');
            $table->string('POWER');
            $table->string('SPEED');
            $table->string('HULL');
            $table->string('CLASS');
            $table->text('YEAR_BUILT');
            $table->string('REGISTER');
            $table->timestamps();
            $table->date('deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ourships');
    }
}
