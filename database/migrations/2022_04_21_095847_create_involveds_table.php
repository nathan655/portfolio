<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolvedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involveds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->timestamps();
        });
        DB::table('involveds')->insert([

                [
                    'name' => 'Princewell Baffour',
                    'link' => 'https://princewell.be/',
                    'created_at' => now(),
                ],
                [
                    'name' => 'Ehran Learnharts',
                    'link' => 'Nateisalive',
                    'created_at' => now()
                    ],
                [
                    'name' => 'Giedre Zalaite',
                    'link' => 'Nateisalive',
                    'created_at' => now()
                ],
                [
                    'name' => 'Micheal Camerlinyck',
                    'link' => 'Nateisalive',
                    'created_at' => now()
                ],
                [
                    'name' => 'Liam Huyberechts',
                    'link' => 'Nateisalive',
                    'created_at' => now()
                ],
                [
                    'name' => 'No one else',
                    'link' => 'https://github.com/nathan655',
                    'created_at' => now()
                ]
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
        Schema::dropIfExists('involveds');
    }
}
