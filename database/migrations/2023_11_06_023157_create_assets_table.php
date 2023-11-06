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
        Schema::create('assets', function (Blueprint $table) {
            $table->Increments('id');

            $table->string('name');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('category');
            $table->text('description');
            $table->integer('company_id')->unsigned();
            
            $table->foreign('company_id')->references('id')->on('companies');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
