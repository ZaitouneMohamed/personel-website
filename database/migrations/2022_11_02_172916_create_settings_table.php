<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('nav_logo',1000)->default(null);
            $table->string('role',1000)->default(null);;
            $table->string('cv',1000)->default(null);;
            $table->string('picture',1000)->default(null);;
            $table->string('about_1',1000)->default(null);;
            $table->string('about_2',1000)->default(null);;
            $table->string('gmail',1000)->default(null);;
            $table->string('github_link',1000)->default(null);;
            $table->string('linkedIn_link',1000)->default(null);;
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
        Schema::dropIfExists('settings');
    }
};
