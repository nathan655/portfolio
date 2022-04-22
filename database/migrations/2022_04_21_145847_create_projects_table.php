<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('course');
            $table->string('description');
            //$table->foreignId('involveds_id');
            $table->string('goal');
            $table->string('where');
            $table->string('img');
            $table->string('achievement');
            $table->string('class');
            $table->string('git');
//            $table->string('learnt');
//            $table->string('involvement');
//            $table->string('softSkills');
//            $table->string('hardSkills');
            $table->timestamps();

            //$table->foreign('involveds_id')->references('id')->on('involveds')->onDelete('restrict')->onUpdate('restrict');
        });
        DB::table('projects')->insert([

                [
                    'title' => 'Project Week',
                    'course' => 'Requirement Analysis',
                    'description' => 'Working on an effective way for students and coordinators to manage training sessions.',
                    'goal' => "To be able to meet up to a customer's need in app production as well as increase our communication skills",
                    'where' => 'On Campus',
                    'achievement' => 'We were able to make a prototype to give our customer an idea on how and what the actual app would look like. We also designed models and workflows on how the app would work.',
                    'img' => 'https://static.wixstatic.com/media/04b97c_f2ddf302a9e940ae872dfa8145629a7c~mv2.jpg',
                    'class' => 'slide-left',
                    'git'=>"none",

                    'created_at' => now(),
                ],
                [
                    'title' => 'Project PHP',
                    'course' => 'Project PHP',
                    'description' => 'Bringing the requirement analysis prototype to life using laravel.',
                    'goal' => "To bring make core functionalities for the webapp to run on and host the webapp successfully.",
                    'where' => 'On Campus and Online',
                    'achievement' => "We were able to make a webapp that suits the customer's needs as well as additional functionalities that would help the user of the webapp enjoy their experience whilst using it.",
                    'img' => 'https://linuxwizardry.com/wp-content/uploads/2022/01/php.png',
                    'class' => 'slide-right',
                    'git'=>"https://github.com/itfactory-tm/2022-ProjectPHP-501",


                    'created_at' => now(),
                ],
                [
                    'title' => 'Xapture',
                    'course' => 'Cordova',
                    'description' => 'Making an app that would serve users multiple functions in various manners.',
                    'goal' => "Make an app with cordova framework, with at least four tabs, one plugin, ajax calls and contact information provided.",
                    'where' => 'On Campus and Online',
                    'achievement' => "I was able to make an app with at least four plugins that serves multiple purposes for the satisfaction of the customer. Two ajax calls that gives the user some daily quotes. A camera to take pictures with and a note pad to take notes.",
                    'img' => "https://securityintelligence.com/wp-content/uploads/2014/08/vulnerability-apache-cordova-android-mobile-app-phonegap-banking.jpg",
                    'class' => 'slide-left text-dark',
                    'git'=>"https://github.com/nathan655/Xapture",


                    'created_at' => now(),
                ],
                [
                    'title' => 'Simu Nation',
                    'course' => 'None (Private)',
                    'description' => 'Ever wondered if you were in a simulation, well this is meant to bring that thought to a halt as we use javascript to make a mini chess like simulation.',
                    'goal' => "Make a simulation where creatures could potentially live lives with multiple possibilities and personalities",
                    'where' => 'Online',
                    'achievement' => "We are able to make the creatures move and show various traits but the project is still ongoing and would be over soon for review.",
                    'img' => "https://repository-images.githubusercontent.com/7741856/20ddf680-86b9-11e9-90e3-aa6dd61c184a",
                    'class' => 'slide-right',
                    'git'=>'https://github.com/LiamHuyberechts/simulation',


                    'created_at' => now(),
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
        Schema::dropIfExists('projects');
    }
}
