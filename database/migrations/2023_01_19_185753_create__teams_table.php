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
        Schema::create('_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Description');
            $table->double('average');
            $table->foreignId('sport_id')->nullable()->constrained('_sports')
            ->nullOnDelete()->cascadeOnDelete();
            $table->foreignId('trainer_id')->nullable()->constrained('_trainers')
            ->nullOnDelete()->cascadeOnDelete();
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
        Schema::dropIfExists('_teams');
    }
};
