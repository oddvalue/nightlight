<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('clocks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->dateTime('sunrise_at');
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clocks');
    }
};
