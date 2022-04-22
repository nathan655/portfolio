<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardskills', function (Blueprint $table) {
            $table->id();
            $table->string('skills');
            $table->foreignId('projects_id');
            $table->timestamps();

            $table->foreign('projects_id')->references('id')->on('projects')->onDelete('restrict')->onUpdate('restrict');
        });
        DB::table('hardskills')->insert(
            [
                [
                    "skills" => "Graphics Design",
                    "projects_id" => 1
                ], [
                "skills" => "Data Analysis",
                "projects_id" => 1
            ], [
                "skills" => "English Speaking",
                "projects_id" => 1
            ], [
                "skills" => "Data interpretation",
                "projects_id" => 2
            ], [
                "skills" => "Data Science",
                "projects_id" => 2
            ], [
                "skills" => "PHP",
                "projects_id" => 2
            ], [
                "skills" => "HTML & CSS",
                "projects_id" => 2
            ], [
                "skills" => "Mobile app development",
                "projects_id" => 3
            ], [
                "skills" => "Jquery",
                "projects_id" => 3
            ], [
                "skills" => "Cordova Plugin",
                "projects_id" => 3
            ],[
                "skills" => "Javascript",
                "projects_id" =>4
            ],[
                "skills" => "NodeJs",
                "projects_id" =>4
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
        Schema::dropIfExists('hardskills');
    }
}
