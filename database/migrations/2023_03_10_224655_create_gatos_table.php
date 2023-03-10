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
        Schema::create('gatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('raca');
            $table->integer('idade');
            $table->string('sexo');
            $table->string('cor');
            $table->text('gatografia');
            $table->string('foto')->nullable()->default('');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gatos');
    }
};
