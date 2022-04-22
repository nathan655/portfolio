<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolvementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involvements', function (Blueprint $table) {
            $table->id();
            $table->string('involvement');
            $table->foreignId('projects_id');
            $table->timestamps();

            $table->foreign('projects_id')->references('id')->on('projects')->onDelete('restrict')->onUpdate('restrict');
        });
        DB::table('involvements')->insert([
                [
                    "involvement" => "Provided a structural database model.",
                    "projects_id" => 1
                ],
                [
                    "involvement" => "Made prototype preview pages for customer's demonstration",
                    "projects_id" => 1
                ],
                [
                    "involvement" => "Participated in creation and migration of database.",
                    "projects_id" => 2
                ],
                [
                    "involvement" => "Use of Ajax in CRUD detailing.",
                    "projects_id" => 2
                ],
                [
                    "involvement" => "I made it all on my own.",
                    "projects_id" => 3
                ],[
                    "involvement" => "I show functionalities and methods for creatures to use.",
                    "projects_id" => 4
                ],[
                    "involvement" => "We work equally.",
                    "projects_id" => 4
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involvements');
    }
}
