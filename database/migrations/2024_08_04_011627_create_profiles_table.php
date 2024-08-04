<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('nationality');
            $table->string('location');
            $table->string('phone');
            $table->string('email');
            $table->json('social_links')->nullable(); // Using JSON for social links
            $table->text('interests')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
