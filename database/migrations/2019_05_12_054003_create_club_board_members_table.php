<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubBoardMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_board_members', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('zipcode');
            $table->string('country');
            $table->string('role');
            $table->unsignedBigInteger('club_id');

            $table->foreign('club_id')
                ->references('id')->on('clubs')
                ->onDelete('cascade');

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
        Schema::dropIfExists('club_board_members');
    }
}
