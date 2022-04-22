<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softskills', function (Blueprint $table) {
            $table->id();
            $table->string('skills');
            $table->foreignId('projects_id');
            $table->timestamps();

            $table->foreign('projects_id')->references('id')->on('projects')->onDelete('restrict')->onUpdate('restrict');
        });
        DB::table('softskills')->insert([
            [
                "skills" => "Communication",
                "projects_id" => 1
            ], [
                "skills" => "Creative Thinking",
                "projects_id" => 1
            ], [
                "skills" => "Team Work",
                "projects_id" => 1
            ], [
                "skills" => "Flexibility",
                "projects_id" => 2
            ], [
                "skills" => "Communication",
                "projects_id" => 2
            ], [
                "skills" => "Creative Thinking",
                "projects_id" => 2
            ], [
                "skills" => "Time Management",
                "projects_id" => 2
            ],
            [
                "skills" => "Creative Thinking",
                "projects_id" => 3
            ], [
                "skills" => "Time Management",
                "projects_id" => 3
            ], [
                "skills" => "Flexibility",
                "projects_id" => 3
            ], [
                "skills" => "Creative Thinking",
                "projects_id" => 4
            ], [
                "skills" => "Time Management",
                "projects_id" => 4
            ], [
                "skills" => "Flexibility",
                "projects_id" => 4
            ], [
                "skills" => "Problem Solving",
                "projects_id" => 4
            ]

        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('softskills');
    }
}
