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
        Schema::create('notes',function (Blueprint $table){
            $table->id();
            $table->string('word');
            $table->tiemstamps();
        });
    }


    public function down(): void
    {
        //
    }
};
