<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learnts', function (Blueprint $table) {
            $table->id();
            $table->string('learnt');
            $table->foreignId('projects_id');
            $table->timestamps();

            $table->foreign('projects_id')->references('id')->on('projects')->onDelete('restrict')->onUpdate('restrict');
        });

        DB::table('learnts')->insert(
            [
                [
                    "learnt" => 'Proper and unfamiliar uses of axure.',
                    'projects_id' => 1
                ],
                [
                    "learnt" => 'Implementation of database and planning in similar real situations',
                    'projects_id' => 1
                ],
                [
                    "learnt" => 'Use of scrum and Agile working.',
                    'projects_id' => 1
                ], [
                "learnt" => "Listening customer's needs and wants and how to address them.",
                'projects_id' => 2
            ], [
                "learnt" => "Technical experience in laravel framework.",
                'projects_id' => 2
            ], [
                "learnt" => "How to tackle Agile plannings in real life scenarios",
                'projects_id' => 2
            ], [
                "learnt" => "Effective team building and interaction.",
                'projects_id' => 2
            ], [
                "learnt" => "I was able to keep track of time spent and put myself into my user's position.",
                'projects_id' => 3
            ], [
                "learnt" => "Technical experience in cordova framework.",
                'projects_id' => 3
            ], [
                "learnt" => "Interviews on how much time would be invested on this app by potential customers.",
                'projects_id' => 3
            ], [
                "learnt" => "How to properly make a soft-coded application",
                'projects_id' => 3
            ], [
                "learnt" => "The use of external javascript libraries for various functions",
                'projects_id' => 4
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
        Schema::dropIfExists('learnts');
    }
}
