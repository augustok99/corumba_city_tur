<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->text('links')->nullable(); // Use text to store multiple links as JSON
        });
    }

    public function down()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->dropColumn('links');
        });
    }

};