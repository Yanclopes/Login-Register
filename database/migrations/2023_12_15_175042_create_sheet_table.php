<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sheet', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->integer('level');
            $table->string('race');
            $table->string('background');
            $table->string('alignment');
            $table->string('alignment_tendency');
            $table->json('attributes');
            $table->json('hit_points');
            $table->integer('speed');
            $table->integer('armor_class');
            $table->integer('initiative');
            $table->integer('action_points');
            $table->boolean('inspiration');
            $table->json('saving_throws');
            $table->json('skills');
            $table->json('languages');
            $table->json('senses');
            $table->json('racial_traits');
            $table->json('class_traits');
            $table->json('known_spells');
            $table->json('equipment');
            $table->text('background_story');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheet');
    }
};
