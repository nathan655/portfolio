<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolvedProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involved_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('involveds_id');
            $table->foreignId('projects_id');
            $table->timestamps();

            $table->foreign('projects_id')->references('id')->on('projects')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('involveds_id')->references('id')->on('involveds')->onDelete('restrict')->onUpdate('restrict');
        });
        DB::table('involved_projects')->insert([
            [
                'involveds_id' => 1,
                'projects_id' => 1,
            ],
            [
                'involveds_id' => 2,
                'projects_id' => 1,
            ],
            [
                'involveds_id' => 3,
                'projects_id' => 1,
            ],
            [
                'involveds_id' => 4,
                'projects_id' => 1,
            ],
            [
                'involveds_id' => 1,
                'projects_id' => 2,
            ],
            [
                'involveds_id' => 2,
                'projects_id' => 2,
            ],
            [
                'involveds_id' => 3,
                'projects_id' => 2,
            ],
            [
                'involveds_id' => 4,
                'projects_id' => 2,
            ],
            [
                'involveds_id' => 5,
                'projects_id' => 4,
            ],
            [
                'involveds_id' => 6,
                'projects_id' => 3,
            ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involved_projects');
    }
}
